<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Jobs\StartCrawlerJob;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\Request;

class StartCrawlerJobTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function the_crawler_can_be_started_for_a_verified_domain()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        $job = new StartCrawlerJob($domain);

        $job->handle($this->getMockedHttpClient([
            new Response(200)
        ]));

        Log::assertLogged('debug', function ($message, $context) {
            return Str::contains($message, "Started crawler for domain:");
        });
    }

    /** @test */
    public function the_crawler_can_not_be_started_for_a_not_verified_domain()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => false]);
        $job = new StartCrawlerJob($domain);

        $job->handle($this->getMockedHttpClient([
            new Response(200)
        ]));

        Log::assertLogged('warning', function ($message, $context) {
            return Str::contains($message, "Crawler was not started, because domain is not verified");
        });
    }

    /** @test */
    public function if_the_crawler_does_not_send_a_httpStatusCode_200_the_event_will_be_logged()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        $job = new StartCrawlerJob($domain);

        $job->handle($this->getMockedHttpClient([
            new Response(500)
        ]));

        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Failed to start crawler for domain:") && Str::contains($message, "HTTP-Status: 500");
        });
    }

    /** @test */
    public function if_the_crawler_could_not_be_reached_the_event_will_be_logged()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        $job = new StartCrawlerJob($domain);

        $job->handle($this->getMockedHttpClient([
            new ConnectException('Connection broken', new Request('POST', config('siwecos.crawlerStartUrl')))
        ]));

        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "The following Exception was thrown") && Str::contains($message, "Connection broken");
        });
    }
}
