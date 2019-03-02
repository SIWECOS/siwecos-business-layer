<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserChangePreferredLanguageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_users_preferredLanguage_can_be_changed()
    {
        $user = $this->getActivatedUser();

        $response = $this->patch('/api/v1/user', [
            'preferred_language' => 'en'
        ], ['userToken' => $user->token->token]);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('en', User::first()->preferred_language);
    }

    /** @test */
    public function the_users_preferredLanguage_should_always_be_2_chars()
    {
        $user = $this->getActivatedUser();

        $response = $this->patch('/api/v1/user', [
            'preferred_language' => 'english'
        ], ['userToken' => $user->token->token]);

        $this->assertEquals(422, $response->getStatusCode());
        $this->assertEquals('de', User::first()->preferred_language);
    }

    /** @test */
    public function only_supported_languages_are_accepted()
    {
        $user = $this->getActivatedUser();

        $response = $this->patch('/api/v1/user', [
            'preferred_language' => 'xx'
        ], ['userToken' => $user->token->token]);

        $this->assertEquals(422, $response->getStatusCode());
        $this->assertEquals('de', User::first()->preferred_language);
    }
}
