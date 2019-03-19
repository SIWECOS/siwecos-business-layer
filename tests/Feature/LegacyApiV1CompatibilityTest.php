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

        $response->assertExactJson([
            'message' => 'Domain was created',
            'hasFailed' => false,
            'domainId' => 1,
            'verificationStatus' => false,
            'domainToken' => Domain::first()->verification_token
        ]);
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

        $response->assertExactJson([
            'message' => 'Domain removed',
            'hasFailed' => false
        ]);
    }

    /** @test */
    public function a_domain_list_can_be_retrieved()
    {
        $user = factory(User::class)->create();
        $user->token->domains()->create(factory(Domain::class)->make()->toArray());
        $user->token->domains()->create(factory(Domain::class)->make(['url' => 'https://siwecos.de'])->toArray());

        $response = $this->json('POST', '/api/v1/domains/listDomains', [], ['userToken' => $user->token->token]);

        $response->assertStatus(200);

        $domain1 = Domain::whereUrl('https://example.org')->first();
        $domain2 = Domain::whereUrl('https://siwecos.de')->first();

        $response->assertExactJson([
            'message' => 'List of all domains',
            'hasFailed' => false,
            'domains' => [
                [
                    'id' => $domain1->id,
                    'domain' => $domain1->url,
                    'verificationStatus' => $domain1->is_verified,
                    'domainToken' => $domain1->verification_token
                ],
                [
                    'id' => $domain2->id,
                    'domain' => $domain2->url,
                    'verificationStatus' => $domain2->is_verified,
                    'domainToken' => $domain2->verification_token
                ]
            ]
        ]);
    }
}
