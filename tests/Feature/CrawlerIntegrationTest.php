<?php

namespace Tests\Feature;

use App\CrawledUrl;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Domain;
use App\Jobs\StartCrawlerJob;
use App\MailDomain;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Queue;

class CrawlerIntegrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_crawler_response_will_be_saved_in_the_associated_models()
    {
        $knownDate = Carbon::create(2019, 2, 8, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);
        $this->getRegisteredDomain(['domain' => 'siwecos.de', 'is_verified' => true]);
        Carbon::setTestNow($knownDate->addDay());

        $response = $this->json('POST', '/api/v2/crawler/finished', collect(json_decode(file_get_contents(base_path('tests/siwecos-crawler-response.json'))))->toArray());

        $response->assertStatus(200);
        $this->assertCount(11, Domain::first()->crawledUrls);
        $this->assertCount(1, CrawledUrl::whereIsMainUrl(true)->get());
        $this->assertCount(4, Domain::first()->mailDomains);

        $this->assertEquals(Domain::first()->updated_at->toDateTimeString(), '2019-02-09 08:30:15');
    }

    /** @test */
    public function if_the_minimal_required_structure_for_crawledUrls_is_missing_the_wrong_format_will_be_logged_and_the_proper_httpStatusCode_will_be_sent()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            // hasError is missing
            'domain' => 'example.org',
            'crawledUrls' => [
                'https://example.org/shop',
            ]
        ]);
        $response->assertStatus(422);
        $this->assertCount(0, Domain::first()->crawledUrls);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Crawler response could not be processed for domain: example.org");
        });

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'hasError' => false,
            'httpCouldConnect' => true,
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
            'hasError' => false,
            'httpCouldConnect' => true,
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
            'hasError' => false,
            'httpCouldConnect' => true,
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
            'hasError' => false,
            'httpCouldConnect' => true,
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
            'hasError' => false,
            'httpCouldConnect' => true,
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
            'hasError' => false,
            'httpCouldConnect' => true,
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
            'hasError' => false,
            'httpCouldConnect' => true,
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
            'hasError' => false,
            'httpCouldConnect' => true,
            'domain' => 'example.org',
            'mailServerDomainList' => [
                // empty
            ]
        ]);
        $response->assertStatus(200);
        $this->assertCount(0, Domain::first()->mailDomains);
    }

    /** @test */
    public function old_mailServer_entries_will_be_detached_if_the_crawler_updates_the_list()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'hasError' => false,
            'httpCouldConnect' => true,
            'domain' => 'example.org',
            'mailServerDomainList' => [
                'mx1.example.org',
                'mx2.example.org'
            ],
        ]);
        $response->assertStatus(200);
        $this->assertCount(2, Domain::first()->mailDomains);
        $this->assertCount(2, MailDomain::all());

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'hasError' => false,
            'httpCouldConnect' => true,
            'domain' => 'example.org',
            'mailServerDomainList' => [
                'mx1.example.org',
                'mx2.example.org',
                'mx3.example.org'
            ],
        ]);
        $response->assertStatus(200);
        $this->assertCount(3, Domain::first()->mailDomains);
        $this->assertCount(3, MailDomain::all());

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'hasError' => false,
            'httpCouldConnect' => true,
            'domain' => 'example.org',
            'mailServerDomainList' => [
                'mx1.example.org',
            ],
        ]);
        $response->assertStatus(200);
        $this->assertCount(1, Domain::first()->mailDomains);
        $this->assertCount(3, MailDomain::all());
    }

    /** @test */
    public function mailDomains_will_not_be_attached_multiple_times_even_if_the_mxRecord_is_set_so()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'hasError' => false,
            'httpCouldConnect' => true,
            'domain' => 'example.org',
            'mailServerDomainList' => [
                'mail.example.org',
                'mail.example.org'
            ],
        ]);

        $response->assertStatus(200);
        $this->assertCount(1, Domain::first()->mailDomains);
        $this->assertCount(1, MailDomain::all());
    }

    /** @test */
    public function old_crawledUrl_entries_will_be_detached_if_the_crawler_updates_the_list()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'hasError' => false,
            'httpCouldConnect' => true,
            'domain' => 'example.org',
            'crawledUrls' => [
                'https://example.org/shop',
                'https://example.org/blog'
            ],
        ]);
        $response->assertStatus(200);
        $this->assertCount(2, Domain::first()->crawledUrls);
        $this->assertCount(2, CrawledUrl::all());

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'hasError' => false,
            'httpCouldConnect' => true,
            'domain' => 'example.org',
            'crawledUrls' => [
                'https://example.org/shop',
                'https://example.org/blog',
                'https://example.org/admin'
            ],
        ]);
        $response->assertStatus(200);
        $this->assertCount(3, Domain::first()->crawledUrls);
        $this->assertCount(3, CrawledUrl::all());

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'hasError' => false,
            'httpCouldConnect' => true,
            'domain' => 'example.org',
            'crawledUrls' => [
                'https://example.org/admin'
            ],
        ]);
        $response->assertStatus(200);
        $this->assertCount(1, Domain::first()->crawledUrls);
        $this->assertCount(3, CrawledUrl::all());
    }

    /** @test */
    public function if_the_crawler_has_an_error_nothing_will_change()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'hasError' => false,
            'httpCouldConnect' => true,
            'domain' => 'example.org',
            'mailServerDomainList' => [
                'mx1.example.org'
            ],
            'crawledUrls' => [
                'https://example.org/shop'
            ]
        ]);
        $response->assertStatus(200);
        $this->assertCount(1, Domain::first()->mailDomains);
        $this->assertCount(1, Domain::first()->crawledUrls);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'hasError' => true,
            'httpCouldConnect' => true,
            'domain' => 'example.org',
            'crawledUrls' => [
                'https://example.org/shop',
                'https://example.org/shop2',
            ]
        ]);
        $response->assertStatus(200);
        $this->assertCount(1, Domain::first()->mailDomains);
        $this->assertCount(1, Domain::first()->crawledUrls);
    }

    /** @test */
    public function the_crawler_will_be_started_periodically_to_update_a_domain()
    {
        $knownDate = Carbon::create(2019, 2, 8, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);

        $domain = $this->getRegisteredDomain(['is_verified' => true]);

        $this->artisan('siwecos:trigger-crawler')
            ->expectsOutput('0 CrawlerJobs were started.');
        Queue::assertNothingPushed();

        Carbon::setTestNow($knownDate->addDays(7));

        $this->artisan('siwecos:trigger-crawler')
            ->expectsOutput('1 CrawlerJobs were started.');
        Queue::assertPushed(StartCrawlerJob::class);
    }

    /** @test */
    public function if_a_domain_could_not_be_crawled_7_times_the_domain_will_be_marked_as_unverified()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);

        for ($i = 0; $i < 7; $i++) {
            $this->assertTrue($domain->refresh()->is_verified);

            $response = $this->json('POST', '/api/v2/crawler/finished', [
                'hasError' => false,
                'httpCouldConnect' => false,
                'domain' => 'example.org',
                'crawledUrls' => [],
            ]);
            $response->assertStatus(200);
        }

        $this->assertFalse($domain->refresh()->is_verified);
    }

    /** @test */
    public function if_a_domain_can_be_crawled_again_the_cache_will_be_reset()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        Cache::put('domain-' . $domain->id . '-couldNotCrawl', 4);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'hasError' => false,
            'httpCouldConnect' => true,
            'domain' => 'example.org',
            'crawledUrls' => [
                'https://example.org/shop'
            ],
        ]);
        $response->assertStatus(200);

        $this->assertNull(Cache::get('domain-' . $domain->id . '-couldNotCrawl'));
    }

    /** @test */
    public function if_a_domain_is_verified_again_after_the_crawler_failed_7_times_the_cache_will_be_reset()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => false]);
        Cache::put('domain-' . $domain->id . '-couldNotCrawl', 7);

        // verify domain
        $this->mockHttpClientAndDomainController([
            new Response(200, [], $domain->token->verification_token),
        ]);
        $response = $this->json('POST', '/api/v2/domain/verify', [
            'domain' => $domain->domain
        ], ['SIWECOS-Token' => $domain->token->token]);
        $response->assertStatus(200);

        $this->assertTrue($domain->refresh()->is_verified);
        $this->assertNull(Cache::get('domain-' . $domain->id . '-couldNotCrawl'));
    }
}
