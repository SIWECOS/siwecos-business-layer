<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Token;
use App\Domain;

class DomainDeletionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_domain_can_be_deleted()
    {
        $token = factory(Token::class)->create();
        $token->domains()->create(factory(Domain::class)->make()->toArray());

        $this->assertCount(1, Domain::all());

        $response = $this->json('DELETE', '/api/v2/domain', [
            'url' => Domain::first()->url
        ], ['SIWECOS-Token' => $token->token]);

        $response->assertStatus(200);
        $this->assertCount(0, Domain::all());
    }

    /** @test */
    public function a_user_can_not_delete_another_users_token()
    {
        $tokenA = factory(Token::class)->create();
        $tokenA->domains()->create(factory(Domain::class)->make()->toArray());
        $this->assertCount(1, Domain::all());

        $tokenB = factory(Token::class)->create();
        $response = $this->json('DELETE', '/api/v2/domain', [
            'url' => Domain::first()->url
        ], ['SIWECOS-Token' => $tokenB->token]);

        $response->assertStatus(403);
        $this->assertCount(1, Domain::all());
    }
}
