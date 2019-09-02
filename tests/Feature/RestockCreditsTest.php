<?php

namespace Tests\Feature;

use App\Token;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;

class RestockCreditsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function token_credits_will_be_restocked_once_a_day()
    {
        $token = factory(Token::class)->create(['type' => 'regular']);

        $this->assertEquals(config('siwecos.defaultTokenCredits'), $token->credits);

        $token->update(['credits' => 5]);

        $this->assertEquals(5, $token->credits);

        $this->artisan('siwecos:restock-credits');

        $this->assertEquals(config('siwecos.defaultTokenCredits'), $token->refresh()->credits);
    }

    /** @test */
    public function third_party_tokens_will_be_restocked_too()
    {
        $token = factory(Token::class)->create(['type' => 'external', 'credits' => 2]);

        $this->artisan('siwecos:restock-credits');

        $this->assertEquals(config('siwecos.thirdPartyTokenCredits'), $token->refresh()->credits);
    }

    /** @test */
    public function if_a_token_owns_more_tokens_than_the_daily_amount_they_will_not_be_reset()
    {
        $token = factory(Token::class)->create(['type' => 'external', 'credits' => 100]);

        $this->assertEquals(100, $token->credits);

        $this->artisan('siwecos:restock-credits');

        $this->assertNotEquals(10, $token->refresh()->credits);
        $this->assertEquals(100, $token->refresh()->credits);
    }
}
