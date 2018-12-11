<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_has_a_preferredLanguage_field_with_default_de()
    {
        $this->getTestUser(true);
        $user = User::first();

        $this->assertEquals('de', $user->preferred_language);
    }
}
