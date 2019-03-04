<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Domain;

class DomainRegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_register_a_new_domain_to_his_token()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('POST', '/api/v2/domain', [
            'url' => 'https://example.org'
        ], ['userToken' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertCount(1, Domain::all());
    }
}
