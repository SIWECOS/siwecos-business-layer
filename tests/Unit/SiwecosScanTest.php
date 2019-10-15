<?php

namespace Tests\Unit;

use App\Domain;
use App\Jobs\StartScanJob;
use App\Scan;
use App\SiwecosScan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Queue;

class SiwecosScanTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->domain = $this->getRegisteredDomain();
        $this->domain->crawledUrls()->createMany([
            ['url' => 'https://example.org/blog'],
            ['url' => 'https://example.org/shop']
        ]);
        $this->domain->mailDomains()->createMany([
            ['domain' => 'mx1.example.org'],
            ['domain' => 'mx2.example.org'],
            ['domain' => 'mx3.example.org']
        ]);
    }

    /** @test */
    public function a_siwecosScan_belongs_to_a_domain()
    {
        $this->domain->siwecosScans()->create([
            'is_freescan' => true,
            'is_recurrent' => false
        ]);

        $this->assertCount(1, SiwecosScan::all());
        $this->assertEquals(Domain::first(), SiwecosScan::first()->domain);
    }

    /** @test */
    public function the_siwecosScan_knows_its_dangerLevel()
    {
        $scan = $this->getGeneratedScan([], ['is_freescan' => true])->siwecosScans->first();
        $this->assertEquals(0, $scan->danger_level);

        $scan = $this->getGeneratedScan([], ['is_freescan' => false])->siwecosScans->first();
        $this->assertEquals(10, $scan->danger_level);
    }

    /** @test */
    public function the_siwecosScan_dispatches_a_scan_with_5_scanners_for_a_freescan()
    {
        $siwecosScan = $this->domain->siwecosScans()->create([
            'is_freescan' => true,
            'is_recurrent' => false
        ]);

        $siwecosScan->dispatchScanJobs();

        Queue::assertPushed(StartScanJob::class, function ($job) {
            return ['DOMXSS', 'HEADER', 'INFOLEAK', 'INI_S', 'TLS'] === $job->scanners;
        });
    }

    /** @test */
    public function all_startScanJobs_will_be_dispatched_via_the_dispatchScanJobs_method_via_manual_scan()
    {
        $siwecosScan = $this->domain->siwecosScans()->create([
            'is_freescan' => false,
            'is_recurrent' => false
        ]);

        $siwecosScan->dispatchScanJobs();

        $this->crawledUrlCounter = 0;
        $this->mailDomainCounter = 0;

        Queue::assertPushed(StartScanJob::class, function ($job) {
            return ['DOMXSS', 'HEADER', 'INFOLEAK', 'INI_S', 'PORT', 'TLS', 'VERSION'] === $job->scanners;
        });

        Queue::assertPushed(StartScanJob::class, function ($job) {
            if (['DOMXSS', 'HEADER', 'INFOLEAK'] === $job->scanners)
                $this->crawledUrlCounter++;
            return $this->crawledUrlCounter >= 1;
        });
        $this->assertEquals(2, $this->crawledUrlCounter);

        Queue::assertPushed(StartScanJob::class, function ($job) {
            if (['IMAP', 'IMAPS', 'POP3', 'POP3S', 'SMTP', 'SMTPS'] === $job->scanners)
                $this->mailDomainCounter++;
            return $this->mailDomainCounter >= 1;
        });
        $this->assertEquals(3, $this->mailDomainCounter);
    }

    /** @test */
    public function if_a_mailDomain_was_scanned_in_the_last_6_hours_no_new_scan_will_be_dispatched_but_the_old_scan_will_be_attached_to_the_siwecosScan()
    {
        $knownDate = Carbon::create(2019, 2, 8, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);

        $oldScan = $this->getFinishedScan(['url' => 'mx2.example.org']);

        Carbon::setTestNow($knownDate->addMinutes(5));

        $siwecosScan = $this->domain->siwecosScans()->create([
            'is_freescan' => false,
            'is_recurrent' => false
        ]);

        $siwecosScan->dispatchScanJobs();

        // Assert that 2 of the 3 MailDomain Scans will be triggered
        $this->mailDomainCounter = 0;
        Queue::assertPushed(StartScanJob::class, function ($job) {
            if (['IMAP', 'IMAPS', 'POP3', 'POP3S', 'SMTP', 'SMTPS'] === $job->scanners)
                $this->mailDomainCounter++;
            return $this->mailDomainCounter >= 1;
        });
        $this->assertEquals(2, $this->mailDomainCounter);

        // Assert that the old MailDomain Scan will be attached to the SiwecosScan
        $this->assertCount(1, $siwecosScan->scans);
        $this->assertEquals($oldScan->id, $siwecosScan->scans->first()->id);
    }

    /** @test */
    public function if_a_siwecosScan_will_be_deleted_all_associated_scans_will_only_be_deleted_if_they_are_not_attached_to_another_siwecosScan()
    {
        $siwecosScan = $this->getFinishedScan()->siwecosScans->first();
        $additionalScan = $this->getFailedScan();
        $additionalScan->siwecosScans()->attach($siwecosScan);

        $this->assertCount(2, $additionalScan->siwecosScans);
        $this->assertCount(2, Scan::all());
        $this->assertCount(2, SiwecosScan::all());

        $siwecosScan->delete();

        $this->assertCount(1, $additionalScan->refresh()->siwecosScans);
        $this->assertCount(1, Scan::all());
        $this->assertCount(1, SiwecosScan::all());

        SiwecosScan::first()->delete();

        $this->assertCount(0, Scan::all());
        $this->assertCount(0, SiwecosScan::all());
    }

    /** @test */
    public function a_siwecosScan_has_a_calculated_startedAt_attribute()
    {
        $siwecosScan = $this->getGeneratedScan()->siwecosScans->first();

        $this->assertNull(SiwecosScan::first()->started_at);

        $siwecosScan->scans()->first()->update([
            'started_at' => now()
        ]);

        $this->assertNotNull(SiwecosScan::first()->started_at);
        $this->assertEquals(now()->toIso8601ZuluString(), SiwecosScan::first()->started_at->toIso8601ZuluString());
    }

    /** @test */
    public function a_siwecosScan_has_a_calculated_isFinished_attribute()
    {
        $siwecosScan = $this->getGeneratedScan()->siwecosScans->first();
        $this->assertFalse($siwecosScan->isFinished);

        $siwecosScan = $this->getFinishedScan()->siwecosScans->first();
        $this->assertTrue($siwecosScan->isFinished);

        $siwecosScan = $siwecosScan->scans()->create(['url' => 'https://example.org/blog']);
        $this->assertFalse($siwecosScan->isFinished);
    }

    /** @test */
    public function a_siwecosScan_has_a_calculated_status_attribute()
    {
        $siwecosScan = $this->getGeneratedScan()->siwecosScans->first();

        $this->assertNotNull($siwecosScan->status);
        $this->assertEquals('created', $siwecosScan->status);

        $siwecosScan = $this->getStartedScan()->siwecosScans->first();
        $this->assertEquals('running', $siwecosScan->status);

        $siwecosScan = $this->getFinishedScan()->siwecosScans->first();
        $this->assertEquals('finished', $siwecosScan->status);

        $siwecosScan = $this->getFailedScan()->siwecosScans->first();
        $this->assertEquals('failed', $siwecosScan->status);

        $siwecosScan = $this->getFinishedScan()->siwecosScans->first();
        $siwecosScan->scans()->create(['url' => 'https://example.org/shop']);
        $this->assertEquals('running', $siwecosScan->status);

        $siwecosScan = $this->getFinishedScan()->siwecosScans->first();
        $siwecosScan->scans()->create(['url' => 'https://example.org/shop']);
        $siwecosScan->scans()->create(['url' => 'https://example.org/failed', 'has_error' => true, 'finished_at' => now()->subMinutes(5)]);
        $this->assertEquals('failed', $siwecosScan->status);
    }
}
