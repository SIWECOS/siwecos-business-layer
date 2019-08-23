<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Domain;
use App\Http\Controllers\DomainController;
use GuzzleHttp\Psr7\Response;
use App\Token;

class DomainRegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_register_a_new_domain_to_his_token()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('POST', '/api/v2/domain', [
            'domain' => 'example.org'
        ], ['SIWECOS-Token' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertCount(1, Domain::all());
    }

    /** @test */
    public function a_domain_with_umlauts_can_be_registered()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('POST', '/api/v2/domain', [
            'domain' => 'cooles-ö.de'
        ], ['SIWECOS-Token' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertCount(1, Domain::all());
    }

    /** @test */
    public function the_domain_can_not_be_saved_when_the_domain_is_no_valid_hostname()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('POST', '/api/v2/domain', [
            'domain' => 'example.org/my/cool/path'
        ], ['SIWECOS-Token' => $user->token->token]);
        $response->assertStatus(422);

        $response = $this->json('POST', '/api/v2/domain', [
            'domain' => 'http://example.org/'
        ], ['SIWECOS-Token' => $user->token->token]);
        $response->assertStatus(422);
    }

    /** @test */
    public function a_domain_will_always_be_registered_with_lowercase_characters()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('POST', '/api/v2/domain', [
            'domain' => 'eXaMPle.ORG'
        ], ['SIWECOS-Token' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertSame('example.org', Domain::first()->domain);
    }

    /** @test */
    public function a_domain_can_not_be_registered_twice()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/domain', [
            'domain' => $domain->domain
        ], ['SIWECOS-Token' => $domain->token->token]);

        $response->assertStatus(403);
    }

    /** @test */
    public function a_registered_domain_is_not_verified_by_default()
    {
        $this->a_user_can_register_a_new_domain_to_his_token();

        $this->assertFalse(Domain::first()->is_verified);
    }

    /** @test */
    public function a_domain_can_be_verified()
    {
        $domain = $this->getRegisteredDomain();

        // Step 2: Mock the HTTPClient
        $this->mockHttpClientAndDomainController([
            new Response(200, [], $domain->verification_token),
        ]);

        // Step 3: Send the verification request
        $response = $this->json('POST', '/api/v2/domain/verify', [
            'domain' => $domain->domain
        ]);

        // Step 4: Get the Domain successfully verified
        $response->assertStatus(200);
        $this->assertTrue($domain->refresh()->is_verified);
    }

    /** @test */
    public function a_domain_can_not_be_verified_twice()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/domain/verify', [
            'domain' => $domain->domain
        ]);

        $response->assertStatus(403);
    }

    /** @test */
    public function if_the_verification_token_is_not_correct_submitted_a_proper_notification_is_returned()
    {
        $domain = $this->getRegisteredDomain();

        $this->mockHttpClientAndDomainController([
            // File-Check
            new Response(200, [], $domain->verification_token . "XYZ"),
            // Meta-Check
            new Response(200, [], ""),
        ]);

        $response = $this->json('POST', '/api/v2/domain/verify', [
            'domain' => $domain->domain
        ]);

        $response->assertStatus(404);
        $this->assertFalse(Domain::first()->is_verified);
    }

    /** @test */
    public function a_registered_domain_is_required_for_verification()
    {
        $response = $this->json('POST', '/api/v2/domain/verify', [
            'data' => 'Not relevant'
        ]);
        $response->assertStatus(422);

        $response = $this->json('POST', '/api/v2/domain/verify', [
            'domain' => 'not_a_valid_domain'
        ]);
        $response->assertStatus(422);

        $response = $this->json('POST', '/api/v2/domain/verify', [
            'domain' => 'is-not-registered.de'
        ]);
        $response->assertStatus(422);
    }

    /** @test */
    public function a_not_verified_domain_can_be_registered_by_another_token()
    {
        $tokenA = factory(Token::class)->create();
        $tokenB = factory(Token::class)->create();

        // TokenA registers Domain example.org but does not verify
        $response = $this->json('POST', '/api/v2/domain', [
            'domain' => 'example.org'
        ], ['SIWECOS-Token' => $tokenA->token]);
        $response->assertStatus(200);
        $this->assertCount(1, $tokenA->refresh()->domains);
        $this->assertCount(0, $tokenB->refresh()->domains);

        // TokenB wants to register the same domain
        $response = $this->json('POST', '/api/v2/domain', [
            'domain' => 'example.org'
        ], ['SIWECOS-Token' => $tokenB->token]);
        $response->assertStatus(200);
        $this->assertCount(0, $tokenA->refresh()->domains);
        $this->assertCount(1, $tokenB->refresh()->domains);
    }

    /** @test */
    public function an_already_verified_domain_can_not_be_registered_to_another_token()
    {
        $tokenA = factory(Token::class)->create();
        $tokenB = factory(Token::class)->create();

        $tokenA->domains()->create(factory(Domain::class)->make([
            'domain' => 'example.org',
            'is_verified' => true
        ])->toArray());

        $response = $this->json('POST', '/api/v2/domain', [
            'domain' => 'example.org'
        ], ['SIWECOS-Token' => $tokenB->token]);
        $response->assertStatus(403);
    }

    public function mockHttpClientAndDomainController(array $mockedResponses)
    {
        $client = $this->getMockedHttpClient($mockedResponses);
        $this->app->bind(DomainController::class, function ($app) use ($client) {
            return new DomainController($client);
        });
    }
}
