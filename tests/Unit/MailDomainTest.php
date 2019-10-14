<?php

namespace Tests\Unit;

use App\MailDomain;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;

class MailDomainTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_mailDomain_belongsToMany_Domains()
    {
        $domain1 = $this->getRegisteredDomain(['is_verified' => true]);
        $domain2 = $this->getRegisteredDomain(['domain' => 'beispiel.de', 'is_verified' => true]);

        $mailDomain = MailDomain::create(['domain' => 'mx.example.org']);
        $domain1->mailDomains()->attach($mailDomain);
        $domain2->mailDomains()->attach($mailDomain);


        $this->assertCount(1, MailDomain::all());
        $this->assertCount(2, MailDomain::first()->domains);
        $this->assertCount(1, $domain1->mailDomains);
        $this->assertCount(1, $domain2->mailDomains);
    }

    /** @test */
    public function a_mailDomain_knows_its_latest_scan()
    {
        $knownDate = Carbon::create(2019, 2, 8, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);

        $domain1 = $this->getRegisteredDomain(['is_verified' => true]);
        $domain2 = $this->getRegisteredDomain(['domain' => 'beispiel.de', 'is_verified' => true]);

        $mailDomain = MailDomain::create(['domain' => 'mx.example.org']);
        $domain1->mailDomains()->attach($mailDomain);
        $domain2->mailDomains()->attach($mailDomain);

        $this->getFinishedScan(['url' => 'mx.example.org'], ['is_freescan' => false, 'is_recurrent' => false]);
        $this->getFinishedScan(['url' => 'https://example.org/shop'], ['is_freescan' => false, 'is_recurrent' => false]);

        $this->assertEquals(1, $mailDomain->latestScan->id);

        Carbon::setTestNow($knownDate->addHours(3));

        $this->getFinishedScan(['url' => 'mx.example.org'], ['is_freescan' => false, 'is_recurrent' => false]);

        $this->assertEquals(3, $mailDomain->latestScan->id);
    }
}
