<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\DomainController;
use GuzzleHttp\Psr7\Response;
use App\Domain;
use App\User;

class LegacyApiV1CompatibilityTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_new_domain_can_be_registered()
    {
        $this->withoutExceptionHandling();
        $user = $this->getActivatedUser();

        $response = $this->json('POST', '/api/v1/domains/addNewDomain', [
            'domain' => 'https://example.org'
        ], ['userToken' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertCount(1, Domain::all());
    }


    /** @test */
    public function a_domain_can_be_verified()
    {
        $this->withoutExceptionHandling();
        $user = $this->getActivatedUser();
        $user->token->domains()->create(factory(Domain::class)->make(['url' => 'https://example.org'])->toArray());

        //  Mock the HTTPClient
        $client = $this->getMockedHttpClient([
            new Response(200, [], Domain::first()->verification_token),
        ]);
        $this->app->bind(DomainController::class, function ($app) use ($client) {
            return new DomainController($client);
        });

        // Send the verification request via old API
        $response = $this->json('POST', '/api/v1/domains/verifyDomain', [
            'domain' => Domain::first()->url
        ], ['userToken' => $user->token->token]);

        // Get the Domain successfully verified
        $response->assertStatus(200);
        $this->assertTrue(Domain::first()->is_verified);
    }

    /** @test */
    public function a_domain_can_be_deleted()
    {
        $user = factory(User::class)->create();
        $user->token->domains()->create(factory(Domain::class)->make()->toArray());

        $this->assertCount(1, Domain::all());

        $response = $this->json('POST', '/api/v1/domains/deleteDomain', [
            'domain' => Domain::first()->url
        ], ['userToken' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertCount(0, Domain::all());
    }
}
