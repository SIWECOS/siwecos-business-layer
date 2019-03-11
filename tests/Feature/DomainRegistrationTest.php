<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Domain;
use App\Http\Controllers\DomainController;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Client;

class DomainRegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_register_a_new_domain_to_his_token()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('POST', '/api/v2/domain', [
            'url' => 'https://example.org'
        ], ['SIWECOS-Token' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertCount(1, Domain::all());
    }

    /** @test */
    public function the_domain_is_saved_without_any_path_indications()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('POST', '/api/v2/domain', [
            'url' => 'https://example.org/my/cool/path'
        ], ['SIWECOS-Token' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertEquals('https://example.org', Domain::first()->url);
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
        // Step 1: Register a new Domain
        $this->a_user_can_register_a_new_domain_to_his_token();

        // Step 2: Mock the HTTPClient
        $client = $this->getMockedHttpClient([
            new Response(200, [], Domain::first()->verification_token),
        ]);
        $this->app->bind(DomainController::class, function ($app) use ($client) {
            return new DomainController($client);
        });

        // Step 3: Send the verification request
        $response = $this->json('POST', '/api/v2/domain/verify', [
            'url' => Domain::first()->url
        ]);

        // Step 4: Get the Domain successfully verified
        $response->assertStatus(200);
        $this->assertTrue(Domain::first()->is_verified);
    }

    /** @test */
    public function a_registered_url_is_required_for_verification()
    {
        $response = $this->json('POST', '/api/v2/domain/verify', [
            'data' => 'Not relevant'
        ]);
        $response->assertStatus(422);

        $response = $this->json('POST', '/api/v2/domain/verify', [
            'url' => 'not_a_valid_url'
        ]);
        $response->assertStatus(422);

        $response = $this->json('POST', '/api/v2/domain/verify', [
            'url' => 'https://is-not-registered.de'
        ]);
        $response->assertStatus(422);
    }
}
