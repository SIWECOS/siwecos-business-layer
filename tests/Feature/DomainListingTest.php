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
                    'url' => 'http://example.org',
                    'is_verified' => false,
                    'verification_token' => $token->verification_token
                ],
                [
                    'domain' => 'siwecos.de',
                    'url' => 'http://siwecos.de',
                    'is_verified' => false,
                    'verification_token' => $token->verification_token
                ]
            ]
        ]);
    }

    /** @test */
    public function only_a_valid_token_is_allowed_to_access_the_route()
    {
        $this->getRegisteredDomain();

        $response = $this->json('GET', '/api/v2/domain', [], ['SIWECOS-Token' => 'invalid']);
        $response->assertStatus(403);

        $response = $this->json('GET', '/api/v2/domain');
        $response->assertStatus(403);
    }

    /** @test */
    public function the_details_for_a_given_single_domain_can_be_requested()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('GET', '/api/v2/domain/' . $domain->domain, [], ['SIWECOS-Token' => $domain->token->token]);

        $response->assertStatus(200);
        $response->assertJson([
            'domain' => 'example.org',
            'url' => 'http://example.org',
            'is_verified' => true,
            'verification_token' => $domain->token->verification_token,
        ]);
    }

    /** @test */
    public function if_a_domain_does_not_exists_a_proper_error_message_for_the_details_route_will_be_returned()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        $response = $this->json('GET', '/api/v2/domain/not-existing.de', [], ['SIWECOS-Token' => $domain->token->token]);

        $response->assertStatus(404);
    }

    /** @test */
    public function the_domain_details_can_be_requested_by_the_every_valid_token()
    {
        $domain1 = $this->getRegisteredDomain(['domain' => 'example.org', 'is_verified' => true]);
        $domain2 = $this->getRegisteredDomain(['domain' => 'beispiel.de', 'is_verified' => true]);

        $response = $this->json('GET', '/api/v2/domain/' . $domain1->domain, [], ['SIWECOS-Token' => $domain2->token->token]);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'verification_token' => $domain2->token->verification_token
        ]);
    }
}
