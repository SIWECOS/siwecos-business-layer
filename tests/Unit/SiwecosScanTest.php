<?php

namespace Tests\Unit;

use App\Domain;
use App\Jobs\StartScanJob;
use App\Scan;
use App\SiwecosScan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
        $scan = $this->getGeneratedScan([], ['is_freescan' => true])->siwecosScan;
        $this->assertEquals(0, $scan->danger_level);

        $scan = $this->getGeneratedScan([], ['is_freescan' => false])->siwecosScan;
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
    public function all_startScanJobs_will_be_dispatched_via_the_dispatchScanJobs_method()
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
    public function if_a_siwecosScan_will_be_deleted_all_associated_scans_will_also_be_deleted()
    {
        $siwecosScan = $this->getFinishedScan()->siwecosScan;

        $this->assertCount(1, Scan::all());
        $this->assertCount(1, SiwecosScan::all());

        $siwecosScan->delete();

        $this->assertCount(0, Scan::all());
        $this->assertCount(0, SiwecosScan::all());
    }

    /** @test */
    public function a_siwecosScan_has_a_calculated_startedAt_attribute()
    {
        $siwecosScan = $this->getGeneratedScan()->siwecosScan;

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
        $siwecosScan = $this->getGeneratedScan()->siwecosScan;
        $this->assertFalse($siwecosScan->isFinished);

        $siwecosScan = $this->getFinishedScan()->siwecosScan;
        $this->assertTrue($siwecosScan->isFinished);

        $siwecosScan = $siwecosScan->scans()->create(['url' => 'https://example.org/blog']);
        $this->assertFalse($siwecosScan->isFinished);
    }

    /** @test */
    public function a_siwecosScan_has_a_calculated_status_attribute()
    {
        $siwecosScan = $this->getGeneratedScan()->siwecosScan;

        $this->assertNotNull($siwecosScan->status);
        $this->assertEquals('created', $siwecosScan->status);

        $siwecosScan = $this->getStartedScan()->siwecosScan;
        $this->assertEquals('running', $siwecosScan->status);

        $siwecosScan = $this->getFinishedScan()->siwecosScan;
        $this->assertEquals('finished', $siwecosScan->status);

        $siwecosScan = $this->getFailedScan()->siwecosScan;
        $this->assertEquals('failed', $siwecosScan->status);

        $siwecosScan = $this->getFinishedScan()->siwecosScan;
        $siwecosScan->scans()->create(['url' => 'https://example.org/shop']);
        $this->assertEquals('running', $siwecosScan->status);

        $siwecosScan = $this->getFinishedScan()->siwecosScan;
        $siwecosScan->scans()->create(['url' => 'https://example.org/shop']);
        $siwecosScan->scans()->create(['url' => 'https://example.org/failed', 'has_error' => true, 'finished_at' => now()->subMinutes(5)]);
        $this->assertEquals('failed', $siwecosScan->status);
    }
}
