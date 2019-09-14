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
        $response = $this->json('POST', '/api/v2/token', [
            'agb_check' => true
        ]);

        $response->assertStatus(200);
        $this->assertCount(1, Token::all());
        $this->assertSame(Token::first()->token, $response->json('token'));
        $this->assertSame('external', Token::first()->type);
    }

    /** @test */
    public function the_agbCheck_flag_must_be_true_in_order_to_register_a_new_token()
    {
        // Set locale to a non-existing one so the test can check for validation.key
        // instead of translated text
        config(['app.locale' => 'XX']);

        $response = $this->json('POST', '/api/v2/token', []);
        $response->assertStatus(422);
        $response->assertJson([
            'agb_check' => ['validation.required']
        ]);

        $response = $this->json('POST', '/api/v2/token', [
            'agb_check' => 'yesIWantIt'
        ]);
        $response->assertStatus(422);
        $response->assertJson([
            'agb_check' => ['validation.boolean']
        ]);

        $response = $this->json('POST', '/api/v2/token', [
            'agb_check' => false
        ]);
        $response->assertStatus(422);
        $response->assertJson([
            'agb_check' => ['The user must accept the General Terms and Conditions to use this service.']
        ]);
    }
}
