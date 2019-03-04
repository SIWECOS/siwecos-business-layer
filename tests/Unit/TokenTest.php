<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Token;
use App\User;
use App\Domain;

class TokenTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_token_can_have_an_associated_user()
    {
        $user = $this->getActivatedUser();

        $this->assertNotNull(Token::first()->user);
        $this->assertEquals(User::first(), Token::first()->user);
    }

    /** @test */
    public function a_token_can_have_many_domains()
    {
        $token = factory(Token::class)->create(['type' => 'external']);

        $token->domains()->create(['url' => 'https://example.org']);
        $this->assertEquals(Domain::first(), Token::first()->domains()->first());

        $token->domains()->create(['url' => 'https://siwecos.de']);
        $this->assertEquals(2, Token::first()->domains()->count());
    }
}
