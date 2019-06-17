<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Token;
use App\User;
use App\Domain;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

        $token->domains()->create(factory(Domain::class)->make()->toArray());
        $this->assertEquals(Domain::first(), Token::first()->domains()->first());

        $token->domains()->create(factory(Domain::class)->make(['domain' => 'siwecos.de'])->toArray());
        $this->assertEquals(2, Token::first()->domains()->count());
    }

    /** @test */
    public function a_token_has_many_scans_through_domains()
    {
        $token = factory(Token::class)->create(['type' => 'external']);
        $this->assertCount(0, $token->scans);
    }

    /** @test */
    public function if_a_token_gets_deleted_all_associated_domains_will_be_deleted_too()
    {
        $domain = $this->getRegisteredDomain();
        $token = $domain->token;
        $token->domains()->create(factory(Domain::class)->make(['domain' => 'siwecos.de'])->toArray());

        $this->assertCount(2, Domain::all());

        $token->delete();

        $this->assertCount(0, Token::all());
        $this->assertCount(0, Domain::all());
    }
}
