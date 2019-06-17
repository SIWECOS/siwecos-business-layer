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
        $domain1 = $token->domains()->create(factory(Domain::class)->make()->toArray());
        $domain2 = $token->domains()->create(factory(Domain::class)->make(['domain' => 'siwecos.de'])->toArray());

        $response = $this->json('GET', '/api/v2/domain', [], ['SIWECOS-Token' => $token->token]);

        $response->assertStatus(200);

        $response->assertJson([
            'domains' => [
                [
                    'domain' => 'example.org',
                    'url' => 'https://example.org',
                    'is_verified' => false,
                    'verification_token' => $domain1->verification_token
                ],
                [
                    'domain' => 'siwecos.de',
                    'url' => 'https://siwecos.de',
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

        $response = $this->json('GET', '/api/v2/domain', [], ['SIWECOS-Token' => 'invalid']);
        $response->assertStatus(403);

        $response = $this->json('GET', '/api/v2/domain');
        $response->assertStatus(403);
    }
}
