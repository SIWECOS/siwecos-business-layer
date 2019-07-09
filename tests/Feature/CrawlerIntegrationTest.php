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
}
