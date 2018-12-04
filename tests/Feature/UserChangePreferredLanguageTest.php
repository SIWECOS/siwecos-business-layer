<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserChangePreferredLanguageTest extends TestCase
{

    /** @test */
    public function the_users_preferredLanguage_can_be_changed()
    {
        $this->getTestUser(true);
        $token = User::first()->token;

        $response = $this->post('/api/v1/users/updateUserData', [
            'preferred_language' => 'en'
        ], ['userToken' => $token]);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('en', User::first()->preferred_language);
    }

    /** @test */
    public function the_users_preferredLanguage_should_always_be_2_chars()
    {
        $this->getTestUser(true);
        $token = User::first()->token;

        $response = $this->post('/api/v1/users/updateUserData', [
            'preferred_language' => 'english'
        ], ['userToken' => $token]);

        $this->assertEquals(422, $response->getStatusCode());
        $this->assertEquals('de', User::first()->preferred_language);
    }
}
