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
        $siwecosScan = $this->getGeneratedScan([], ['is_freescan' => true])->siwecosScan;

        $job = new StartScanJob($siwecosScan, $siwecosScan->domain->mainUrl, ['HEADER']);

        $this->assertInstanceOf(StartScanJob::class, $job);
        $this->assertEquals('http://example.org', $job->siwecosScan->domain->mainUrl);
        $this->assertEquals(true, $job->siwecosScan->is_freescan);
        $this->assertEquals(false, $job->siwecosScan->is_recurrent);
    }


    /** @test */
    public function when_the_startScanJob_is_running_a_new_scan_will_be_created_with_a_startetAt_value()
    {
        $siwecosScan = $this->getRegisteredDomain()->siwecosScans()->create([
            'is_freescan' => true,
            'is_recurrent' => false
        ]);
        $job = new StartScanJob($siwecosScan, $siwecosScan->domain->mainUrl, ['HEADER']);

        $this->assertCount(0, Scan::all());

        $job->handle($this->getMockedHttpClient([
            new Response(200)
        ]));

        $this->assertCount(1, Scan::all());
        $this->assertEquals(Carbon::now()->toIso8601ZuluString(), Scan::first()->started_at->toIso8601ZuluString());
    }

    /** @test */
    public function when_the_scanJob_could_not_be_received_by_coreApi_the_scan_saves_the_error_and_is_marked_as_finished()
    {
        $siwecosScan = $this->getRegisteredDomain()->siwecosScans()->create([
            'is_freescan' => true,
            'is_recurrent' => false
        ]);
        $job = new StartScanJob($siwecosScan, $siwecosScan->domain->mainUrl, ['HEADER']);

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
        $siwecosScan = $this->getRegisteredDomain()->siwecosScans()->create([
            'is_freescan' => true,
            'is_recurrent' => false
        ]);
        $job = new StartScanJob($siwecosScan, $siwecosScan->domain->mainUrl, ['HEADER']);

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
        $siwecosScan = $this->getRegisteredDomain()->siwecosScans()->create([
            'is_freescan' => false,
            'is_recurrent' => false
        ]);
        $job = new StartScanJob($siwecosScan, $siwecosScan->domain->mainUrl, ['HEADER']);

        $tokensBeforeScan = Token::first()->credits;

        $job->handle($this->getMockedHttpClient([
            new Response(200)
        ]));

        $this->assertEquals($tokensBeforeScan - 1, Token::first()->credits);
    }

    /** @test */
    public function the_token_credits_will_not_be_reduced_by_reccurent_scans()
    {
        $siwecosScan = $this->getRegisteredDomain()->siwecosScans()->create([
            'is_freescan' => true,
            'is_recurrent' => false
        ]);
        $job = new StartScanJob($siwecosScan, $siwecosScan->domain->mainUrl, ['HEADER']);

        $tokensBeforeScan = Token::first()->credits;

        $job->handle($this->getMockedHttpClient([
            new Response(200)
        ]));

        $this->assertEquals($tokensBeforeScan, Token::first()->credits);
    }

    /** @test */
    public function in_case_of_failure_the_token_credits_get_not_reduced()
    {
        $siwecosScan = $this->getRegisteredDomain()->siwecosScans()->create([
            'is_freescan' => false,
            'is_recurrent' => false
        ]);
        $job = new StartScanJob($siwecosScan, $siwecosScan->domain->mainUrl, ['HEADER']);

        $tokensBeforeScan = Token::first()->credits;

        $job->handle($this->getMockedHttpClient([
            new Response(404)
        ]));

        $this->assertEquals($tokensBeforeScan, Token::first()->credits);
    }

    /** @test */
    public function when_a_freescan_was_started_for_an_already_registered_domain_the_credits_of_the_domain_owners_token_will_not_be_reduced()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        $siwecosScan = $domain->siwecosScans()->create(['is_freescan' => true, 'is_recurrent' => false]);
        $job = new StartScanJob($siwecosScan, $domain->mainUrl, ['HEADER']);

        $tokensBeforeScan = Token::first()->credits;

        $job->handle($this->getMockedHttpClient([
            new Response(200)
        ]));

        $this->assertEquals($tokensBeforeScan, Token::first()->credits);
    }
}
