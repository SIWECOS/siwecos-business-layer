<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Jobs\StartScanJob;
use GuzzleHttp\Psr7\Response;
use Carbon\Carbon;
use App\Scan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Token;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class StartScanJobTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_startScanJob_accepts_needed_parameters()
    {
        $scan = $this->getGeneratedScan([], ['is_freescan' => true]);

        $job = new StartScanJob($scan, 0, ['HEADER']);

        $this->assertInstanceOf(StartScanJob::class, $job);
        $this->assertEquals(0, $job->dangerLevel);
        $this->assertEquals(['HEADER'], $job->scanners);
    }


    /** @test */
    public function when_the_startScanJob_is_running_the_startedAt_value_of_the_scan_will_be_set()
    {
        $scan = $this->getRegisteredDomain()->siwecosScans()->create([
            'is_freescan' => true,
            'is_recurrent' => false
        ])->scans()->create(['url' => 'https://example.org']);

        $job = new StartScanJob($scan, 0, ['HEADER']);

        $this->assertNull(Scan::first()->started_at);

        $job->handle($this->getMockedHttpClient([
            new Response(200)
        ]));

        $this->assertEquals(now()->toIso8601ZuluString(), Scan::first()->started_at->toIso8601ZuluString());
    }

    /** @test */
    public function when_the_scanJob_could_not_be_received_by_coreApi_the_scan_saves_the_error_and_is_marked_as_finished()
    {
        $scan = $this->getRegisteredDomain()->siwecosScans()->create([
            'is_freescan' => true,
            'is_recurrent' => false
        ])->scans()->create(['url' => 'https://example.org']);

        $job = new StartScanJob($scan, 0, ['HEADER']);

        $job->handle($this->getMockedHttpClient([
            new Response(500)
        ]));

        $this->assertEquals(now()->toIso8601ZuluString(), Scan::first()->finished_at->toIso8601ZuluString());
        $this->assertTrue(Scan::first()->has_error);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Failed to start scan for scan id:");
        });
    }

    /** @test */
    public function when_the_scanJob_throws_an_curl_exception_the_scan_is_marked_with_error_and_finished()
    {
        $scan = $this->getRegisteredDomain()->siwecosScans()->create([
            'is_freescan' => true,
            'is_recurrent' => false
        ])->scans()->create(['url' => 'https://example.org']);

        $job = new StartScanJob($scan, 0, ['HEADER']);

        $job->handle($this->getMockedHttpClient([
            new RequestException('Could not connect to CoreAPI', new Request('POST', 'test'))
        ]));

        $this->assertEquals(now()->toIso8601ZuluString(), Scan::first()->finished_at->toIso8601ZuluString());
        $this->assertTrue(Scan::first()->has_error);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Could not connect to CoreAPI");
        });
    }
}
