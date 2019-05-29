<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Token;

class TokenRegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_3rd_party_token_can_be_registered_via_the_api()
    {
        $this->withoutExceptionHandling();
        $response = $this->json('GET', '/api/v2/token');

        $response->assertStatus(200);
        $this->assertCount(1, Token::all());
        $this->assertSame(Token::first()->token, $response->json('token'));
        $this->assertSame('external', Token::first()->type);
    }
}
