<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Jobs\StartScanJob;
use GuzzleHttp\Psr7\Response;
use Carbon\Carbon;
use App\Scan;
use TiMacDonald\Log\LogFake;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class StartScanJobTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_startScanJob_accepts_needed_parameters()
    {
        $scan = $this->getGeneratedScan(['is_freescan' => true]);

        $job = new StartScanJob($scan);

        $this->assertInstanceOf(StartScanJob::class, $job);
        $this->assertEquals('https://example.org', $job->scan->domain->url);
        $this->assertEquals(true, $job->scan->is_freescan);
        $this->assertEquals(false, $job->scan->is_recurrent);
    }

    /** @test */
    public function by_default_the_dangerLevel_is_0_on_freescans()
    {
        $scan = $this->getGeneratedScan(['is_freescan' => true]);
        $job = new StartScanJob($scan);

        $this->assertEquals(0, $job->danger_level);
    }

    /** @test */
    public function by_default_the_dangerLevel_is_10_on_nonFreescans()
    {
        $scan = $this->getGeneratedScan(['is_freescan' => false]);
        $job = new StartScanJob($scan);

        $this->assertEquals(10, $job->danger_level);
    }

    /** @test */
    public function when_the_scanJob_was_sent_to_the_coreApi_the_scan_gets_the_startetAt_value()
    {
        $scan = $this->getGeneratedScan(['is_freescan' => false]);
        $job = new StartScanJob($scan, $this->getMockedHttpClient([
            new Response(200)
        ]));

        $job->handle();
        $this->assertEquals(Carbon::now()->toDateTimeString(), Scan::first()->started_at);
    }

    /** @test */
    public function when_the_scanJob_could_not_be_received_by_coreApi_the_scan_saves_the_error_and_is_marked_as_finished()
    {
        Log::swap(new LogFake);

        $scan = $this->getGeneratedScan(['is_freescan' => false]);
        $job = new StartScanJob($scan, $this->getMockedHttpClient([
            new Response(500)
        ]));

        $job->handle();

        $this->assertEquals(Carbon::now()->toDateTimeString(), Scan::first()->finished_at);
        $this->assertTrue(Scan::first()->has_error);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Failed to start scan for scan id:");
        });
    }
}
