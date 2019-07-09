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
        $scan = $this->getGeneratedScan(['is_freescan' => true]);

        $job = new StartScanJob($scan);

        $this->assertInstanceOf(StartScanJob::class, $job);
        $this->assertEquals('https://example.org', $job->scan->domain->mainUrl);
        $this->assertEquals(true, $job->scan->is_freescan);
        $this->assertEquals(false, $job->scan->is_recurrent);
    }


    /** @test */
    public function when_the_scanJob_was_sent_to_the_coreApi_the_scan_gets_the_startetAt_value()
    {
        $scan = $this->getGeneratedScan(['is_freescan' => false]);
        $job = new StartScanJob($scan);

        $job->handle($this->getMockedHttpClient([
            new Response(200)
        ]));

        $this->assertEquals(Carbon::now()->toIso8601ZuluString(), Scan::first()->started_at->toIso8601ZuluString());
    }

    /** @test */
    public function when_the_scanJob_could_not_be_received_by_coreApi_the_scan_saves_the_error_and_is_marked_as_finished()
    {
        $scan = $this->getGeneratedScan(['is_freescan' => false]);
        $job = new StartScanJob($scan);

        $job->handle($this->getMockedHttpClient([
            new Response(500)
        ]));

        $this->assertEquals(Carbon::now()->toIso8601ZuluString(), Scan::first()->finished_at->toIso8601ZuluString());
        $this->assertTrue(Scan::first()->has_error);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Failed to start scan for scan id:");
        });
    }

    /** @test */
    public function when_the_scanJob_throws_an_curl_exception_the_scan_is_marked_with_error_and_finished()
    {
        $scan = $this->getGeneratedScan(['is_freescan' => false]);
        $job = new StartScanJob($scan);

        $job->handle($this->getMockedHttpClient([
            new RequestException('Could not connect to CoreAPI', new Request('POST', 'test'))
        ]));

        $this->assertEquals(Carbon::now()->toIso8601ZuluString(), Scan::first()->finished_at->toIso8601ZuluString());
        $this->assertTrue(Scan::first()->has_error);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Could not connect to CoreAPI");
        });
    }

    /** @test */
    public function when_a_scan_was_started_the_token_credits_get_reduced_by_1()
    {
        $scan = $this->getGeneratedScan();
        $job = new StartScanJob($scan);

        $tokensBeforeScan = Token::first()->credits;

        $job->handle($this->getMockedHttpClient([
            new Response(200)
        ]));

        $this->assertEquals($tokensBeforeScan - 1, Scan::first()->token->credits);
    }

    /** @test */
    public function in_case_of_failure_the_token_credits_get_not_reduced()
    {
        $scan = $this->getGeneratedScan();
        $job = new StartScanJob($scan);

        $tokensBeforeScan = Token::first()->credits;

        $job->handle($this->getMockedHttpClient([
            new Response(404)
        ]));

        $this->assertEquals($tokensBeforeScan, Scan::first()->token->credits);
    }

    /** @test */
    public function when_a_freescan_was_started_for_an_already_registered_domain_the_credits_of_the_domain_owners_token_will_not_be_reduced()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        $scan = $domain->scans()->create(['is_freescan' => true]);
        $job = new StartScanJob($scan);

        $tokensBeforeScan = Token::first()->credits;

        $job->handle($this->getMockedHttpClient([
            new Response(200)
        ]));

        $this->assertEquals($tokensBeforeScan, Scan::first()->token->credits);
    }
}
