<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Token;
use App\Domain;

class DomainListingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function there_is_an_endpoint_to_retrieve_all_domains_that_are_associated_with_a_specific_token()
    {
        $token = factory(Token::class)->create();
        $token->domains()->create(factory(Domain::class)->make()->toArray());
        $token->domains()->create(factory(Domain::class)->make(['url' => 'https://siwecos.de'])->toArray());

        $domain1 = Domain::whereUrl('https://example.org')->first();
        $domain2 = Domain::whereUrl('https://siwecos.de')->first();
        $response = $this->json('GET', '/api/v2/domain', [], ['SIWECOS-Token' => $token->token]);

        $response->assertStatus(200);

        $response->assertJson([
            'domains' => [
                [
                    'domain' => $domain1->domain,
                    'url' => $domain1->url,
                    'is_verified' => false,
                    'verification_token' => $domain1->verification_token
                ],
                [
                    'domain' => $domain2->domain,
                    'url' => $domain2->url,
                    'is_verified' => false,
                    'verification_token' => $domain2->verification_token
                ]
            ]
        ]);
    }

    /** @test */
    public function only_a_valid_token_is_allowed_to_access_the_route()
    {
        $domain = $this->getRegisteredDomain();
        $token = $domain->token;

        $response = $this->json('GET', '/api/v2/domain', [], ['SIWECOS-Token' => 'invalid']);
        $response->assertStatus(403);

        $response = $this->json('GET', '/api/v2/domain');
        $response->assertStatus(403);
    }
}
