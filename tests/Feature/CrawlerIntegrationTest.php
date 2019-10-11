<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use App\Domain;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CrawlerIntegrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_crawler_response_will_be_saved_in_the_associated_models()
    {
        $this->getRegisteredDomain(['domain' => 'siwecos.de', 'is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', collect(json_decode(file_get_contents(base_path('tests/siwecos-crawler-response.json'))))->toArray());

        $response->assertStatus(200);
        $this->assertCount(10, Domain::first()->crawledUrls);
        $this->assertCount(4, Domain::first()->mailDomains);
    }

    /** @test */
    public function if_the_minimal_required_structure_for_crawledUrls_is_missing_the_wrong_format_will_be_logged_and_the_proper_httpStatusCode_will_be_sent()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'domain' => 'example.org',
            'crawledUrls' => [
                'not-a-url',
                'https://example.org/shop',
            ]
        ]);
        $response->assertStatus(422);
        $this->assertCount(0, Domain::first()->crawledUrls);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Crawler response could not be processed for domain: example.org");
        });

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'domain' => 'not-a-valid-hostname',
            'crawledUrls' => [
                'https://example.org/shop',
            ]
        ]);
        $response->assertStatus(422);
        $this->assertCount(0, Domain::first()->crawledUrls);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Crawler response could not be processed for domain: not-a-valid-hostname");
        });

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'domain' => 'is-not-registered.de',
            'crawledUrls' => [
                'https://example.org/shop',
            ]
        ]);
        $response->assertStatus(422);
        $this->assertCount(0, Domain::first()->crawledUrls);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Crawler response could not be processed for domain: is-not-registered.de");
        });
    }

    /** @test */
    public function its_allowed_that_the_crawledUrls_response_is_empty()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'domain' => 'example.org',
            'crawledUrls' => [
                // empty
            ]
        ]);
        $response->assertStatus(200);
        $this->assertCount(0, Domain::first()->crawledUrls);
    }

    /** @test */
    public function if_the_minimal_required_structure_for_mailServerDomainList_is_missing_the_wrong_format_will_be_logged_and_the_proper_httpStatusCode_will_be_sent()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'domain' => 'example.org',
            'mailServerDomainList' => [
                'not-a-domain',
                'mx2.example.org',
            ]
        ]);
        $response->assertStatus(422);
        $this->assertCount(0, Domain::first()->mailDomains);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Crawler response could not be processed for domain: example.org");
        });

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'domain' => 'example.org',
            'mailServerDomainList' => [
                'https://url-but-not-domain.com',
            ]
        ]);
        $response->assertStatus(422);
        $this->assertCount(0, Domain::first()->mailDomains);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Crawler response could not be processed for domain: example.org");
        });

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'domain' => 'is-not-registered.de',
            'mailServerDomainList' => [
                'example.org',
            ]
        ]);
        $response->assertStatus(422);
        $this->assertCount(0, Domain::first()->mailDomains);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Crawler response could not be processed for domain: is-not-registered.de");
        });
    }

    /** @test */
    public function its_allowed_that_the_mailServerDomainList_response_is_empty()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'domain' => 'example.org',
            'mailServerDomainList' => [
                // empty
            ]
        ]);
        $response->assertStatus(200);
        $this->assertCount(0, Domain::first()->mailDomains);
    }
}