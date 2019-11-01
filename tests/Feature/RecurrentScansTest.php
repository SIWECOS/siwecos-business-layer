<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use App\Jobs\StartScanJob;
use App\SiwecosScan;

class RecurrentScansTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function for_every_verified_domain_a_daily_scan_will_be_performed()
    {
        $this->getRegisteredDomain(['is_verified' => true]);
        $this->getRegisteredDomain(['domain' => 'another.domain', 'is_verified' => false]);

        $this->artisan('siwecos:trigger-daily-scans')
            ->expectsOutput('1 Scans were started.');
        $this->assertCount(1, SiwecosScan::all());

        Queue::assertPushed(StartScanJob::class, 1);
    }

    /** @test */
    public function the_scans_for_crawledUrls_will_also_be_triggered()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        $domain->crawledUrls()->createMany([
            ['url' => 'https://example.org/shop'],
            ['url' => 'https://example.org/blog'],
        ]);

        $this->artisan('siwecos:trigger-daily-scans')
            ->expectsOutput('1 Scans were started.');
        $this->assertCount(1, SiwecosScan::all());

        Queue::assertPushed(StartScanJob::class, 3);
    }

    /** @test */
    public function the_scans_for_mailDomains_will_also_be_triggered()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        $domain->mailDomains()->createMany([
            ['domain' => 'mx1.example.org'],
            ['domain' => 'mx2.example.org'],
            ['domain' => 'mx3.example.org'],
        ]);

        $this->artisan('siwecos:trigger-daily-scans')
            ->expectsOutput('1 Scans were started.');
        $this->assertCount(1, SiwecosScan::all());

        Queue::assertPushed(StartScanJob::class, 4);
    }

    /** @test */
    public function assert_that_no_errors_occur_when_the_scans_are_dispatched_even_if_a_mail_domain_is_attached_multiple_times_to_the_domain()
    {
        $this->getRegisteredDomain(['domain' => 'beispiel.de', 'is_verified' => true]);

        $domain1 = $this->getRegisteredDomain(['is_verified' => true]);
        $mailDomain = $domain1->mailDomains()->create([
            'domain' => 'mx.example.org'
        ]);

        // Attaching the mailDomain a second time lead to a DatabaseException within the command
        // when dispatching the StartScanJobs
        $domain1->mailDomains()->attach($mailDomain);

        $this->assertCount(2, $domain1->mailDomains);

        $this->artisan('siwecos:trigger-daily-scans')
            ->expectsOutput('2 Scans were started.');
    }
}
