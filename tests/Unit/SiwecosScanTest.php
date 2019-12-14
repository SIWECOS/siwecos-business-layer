<?php

namespace Tests\Unit;

use App\Domain;
use App\Jobs\StartScanJob;
use App\Scan;
use App\SiwecosScan;
use DB;
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
        $this->assertEquals(Domain::first()->domain, SiwecosScan::first()->domain->domain);
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
            if (['INI_S', 'PORT', 'IMAP_TLS', 'IMAPS_TLS', 'POP3_TLS', 'POP3S_TLS', 'SMTP_TLS', 'SMTPS_TLS', 'SMTP_MSA_TLS'] === $job->scanners)
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
            if (['INI_S', 'PORT', 'IMAP_TLS', 'IMAPS_TLS', 'POP3_TLS', 'POP3S_TLS', 'SMTP_TLS', 'SMTPS_TLS', 'SMTP_MSA_TLS'] === $job->scanners)
                $this->mailDomainCounter++;
            return $this->mailDomainCounter >= 1;
        });
        $this->assertEquals(2, $this->mailDomainCounter);

        // Assert that the old MailDomain Scan will be attached to the SiwecosScan
        $this->assertNotNull($siwecosScan->scans()->find($oldScan->id));
    }

    /** @test */
    public function if_a_mailDomain_has_a_failed_scan_in_the_last_6_hours_a_new_scan_will_be_dispatched_and_attached()
    {
        $knownDate = Carbon::create(2019, 2, 8, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);

        $oldScan = $this->getFailedScan(['url' => 'mx2.example.org']);

        Carbon::setTestNow($knownDate->addMinutes(5));

        $siwecosScan = $this->domain->siwecosScans()->create([
            'is_freescan' => false,
            'is_recurrent' => false
        ]);

        $siwecosScan->dispatchScanJobs();

        // Assert that 3 of the 3 MailDomain Scans will be triggered
        $this->mailDomainCounter = 0;
        Queue::assertPushed(StartScanJob::class, function ($job) {
            if (['INI_S', 'PORT', 'IMAP_TLS', 'IMAPS_TLS', 'POP3_TLS', 'POP3S_TLS', 'SMTP_TLS', 'SMTPS_TLS', 'SMTP_MSA_TLS'] === $job->scanners)
                $this->mailDomainCounter++;
            return $this->mailDomainCounter >= 1;
        });
        $this->assertEquals(3, $this->mailDomainCounter);

        $this->assertNull($siwecosScan->scans()->find($oldScan->id));
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
        // Assert correct relationships in database
        $this->assertCount(1, \DB::select('select * from scan_siwecos_scan'));

        SiwecosScan::first()->delete();

        $this->assertCount(0, Scan::all());
        $this->assertCount(0, SiwecosScan::all());
        // Assert correct relationships in database
        $this->assertCount(0, \DB::select('select * from scan_siwecos_scan'));
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

    /** @test */
    public function a_siwecosScan_can_return_the_average_scannerScores_as_a_collection()
    {
        $siwecosScan = $this->getFinishedScan()->siwecosScans->first();
        $additionalScan = $this->getFinishedScan(['url' => 'https://example.org/shop']);
        $additionalScan->results = $additionalScan->results->map(function ($scanner) {
            $scanner['score'] = 0;
            return $scanner;
        });
        $additionalScan->save();
        $siwecosScan->scans()->attach($additionalScan);

        $this->assertCount(2, $siwecosScan->scans);

        $expectedCollection = collect([
            'DOMXSS' => 25, // (50 + 0) / 2
            'HEADER' => 42.5, // (85 + 0) / 2
            'INFOLEAK' => 50, // (100 + 0 ) / 2
            'INI_S' => 50, // (100 + 0 ) / 2
            'TLS' => 50 // (100 + 0 ) / 2
        ]);

        $this->assertEquals($expectedCollection, $siwecosScan->getAverageScannerScores());
    }

    /** @test */
    public function a_siwecosScan_as_a_calculated_total_score_as_an_weighted_average()
    {
        config(['siwecos.scannerWeight.TLS' => 3]);
        config(['siwecos.scannerWeight.DOMXSS' => 0]);

        $siwecosScan = $this->getFinishedScan()->siwecosScans->first();
        $additionalScan = $this->getFinishedScan(['url' => 'https://example.org/shop']);
        $additionalScan->results = $additionalScan->results->map(function ($scanner) {
            $scanner['score'] = 0;
            return $scanner;
        });
        $additionalScan->save();
        $siwecosScan->scans()->attach($additionalScan);

        $this->assertCount(2, $siwecosScan->scans);

        $this->assertEquals(49, $siwecosScan->score);
    }

    /** @test */
    public function if_a_scan_has_at_least_one_scoreTypeCritical_than_the_total_score_will_be_capped_at_20()
    {
        $scan = $this->getFinishedScan();

        $this->assertEquals(87, $scan->siwecosScans->first()->score);

        $scan->results = $scan->results->transform(function ($scanner) {
            $scanner['tests'][0]['scoreType'] = 'critical';
            return $scanner;
        });
        $scan->save();

        $this->assertEquals(20, $scan->refresh()->siwecosScans->first()->score);
    }

    /** @test */
    public function if_a_siwecosScan_does_not_have_any_scans_yet_the_core_will_be_0()
    {
        $siwecosScan = Domain::first()->siwecosScans()->create(['is_freescan' => true, 'is_recurrent' => false]);

        $this->assertEquals(0, $siwecosScan->score);
    }

    /** @test */
    public function the_scan_siwecos_scan_table_will_be_cleaned_if_a_siwecosScan_gets_deleted()
    {
        $siwecosScan = $this->getFinishedScan()->siwecosScans->first();
        $this->assertCount(1, DB::table('scan_siwecos_scan')->get());

        $siwecosScan->delete();
        $this->assertCount(0, DB::table('scan_siwecos_scan')->get());
    }
}
