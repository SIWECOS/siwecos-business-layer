<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use App\Domain;

class CrawlerIntegrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_crawler_callback_response_will_be_saved_in_the_associated_domain_model()
    {
        $domain = $this->getRegisteredDomain(['domain' => 'siwecos.de', 'is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', collect(json_decode(file_get_contents(base_path('tests/siwecos-crawler-response.json'))))->toArray());

        $response->assertStatus(200);
        $this->assertInstanceOf(Collection::class, Domain::first()->urls);
        $this->assertCount(10, Domain::first()->urls);
    }

    /** @test */
    public function the_crawler_callback_response_must_have_a_defined_structure()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'result' => [
                'domain' => 'example.org',
                'urls' => [
                    'https://example.org/blog',
                    'https://example.org/shop',
                ]
            ]
        ]);

        $response->assertStatus(200);
        $this->assertInstanceOf(Collection::class, Domain::first()->urls);
        $this->assertCount(2, Domain::first()->urls);
    }

    /** @test */
    public function if_the_minimal_required_structure_is_missing_the_wrong_format_will_be_logged_and_the_proper_httpStatusCode_will_be_sent()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'result' => [
                'domain' => 'example.org',
                'urls' => [
                    'not-a-url',
                    'https://example.org/shop',
                ]
            ]
        ]);
        $response->assertStatus(422);
        $this->assertNull(Domain::first()->urls);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'result' => [
                'domain' => 'example.org',
                'urls' => [
                    // empty
                ]
            ]
        ]);
        $response->assertStatus(422);
        $this->assertNull(Domain::first()->urls);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'result' => [
                'domain' => 'not-a-valid-hostname',
                'urls' => [
                    'https://example.org/shop',
                ]
            ]
        ]);
        $response->assertStatus(422);
        $this->assertNull(Domain::first()->urls);

        $response = $this->json('POST', '/api/v2/crawler/finished', [
            'result' => [
                'domain' => 'is-not-registered.de',
                'urls' => [
                    'https://example.org/shop',
                ]
            ]
        ]);
        $response->assertStatus(422);
        $this->assertNull(Domain::first()->urls);
    }
}
