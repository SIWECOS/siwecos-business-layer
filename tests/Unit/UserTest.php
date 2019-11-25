<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Token;
use App\Domain;
use App\Scan;
use App\SiwecosScan;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_has_a_preferredLanguage_field_with_default_de()
    {
        $this->getActivatedUser();

        $this->assertEquals('de', User::first()->preferred_language);
    }

    /** @test */
    public function a_user_has_an_associated_token()
    {
        $user = $this->getActivatedUser();

        $this->assertNotNull($user->token);
        $this->assertEquals(Token::first(), $user->token);
    }

    /** @test */
    public function if_a_user_deletes_his_account_all_associated_models_will_be_deleted_too()
    {
        $scan = $this->getFinishedScan();
        $user = $this->getActivatedUser();
        $scan->siwecosScans->first()->domain->token()->associate($user->token)->save();
        Token::find(1)->delete(); // delete original $scan->token

        $this->assertCount(1, $user->refresh()->token->domains);
        $this->assertCount(1, $user->token->domains()->first()->siwecosScans);

        $user->delete();
        $this->assertCount(0, User::all());
        $this->assertCount(0, Token::all());
        $this->assertCount(0, Domain::all());
        $this->assertCount(0, SiwecosScan::all());
        $this->assertCount(0, Scan::all());
    }
}
