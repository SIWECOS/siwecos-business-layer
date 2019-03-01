<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Token;
use App\Http\Controllers\WpPasswordAuthentication;
use Illuminate\Support\Facades\Notification;
use App\Notifications\forgotpasswordmail;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();
        Notification::fake();
    }

    /** @test */
    public function an_activated_user_can_login_to_siwecos_bla_with_correct_credentials()
    {
        $user = $this->getActivatedUser(['password' => \Hash::make('abcd1234')]);

        $response = $this->json('POST', '/api/v1/user/login', [
            'email' => $user->email,
            'password' => 'abcd1234'
        ]);

        $response->assertStatus(200);
        $response->assertJson($user->toArray());
    }

    /** @test */
    public function login_is_not_possible_if_the_credentials_are_not_correct()
    {
        $response = $this->json('POST', '/api/v1/user/login', [
            'email' => 'not@existing.com',
            'password' => 'abcd1234'
        ]);
        $response->assertStatus(403);


        $response = $this->json('POST', '/api/v1/user/login', [
            'password' => 'email field is missing'
        ]);
        $response->assertStatus(422);


        $user = $this->getActivatedUser(['password' => \Hash::make('abcd1234')]);
        $response = $this->json('POST', '/api/v1/user/login', [
            'email' => $user->email,
            'password' => 'wrong_password'
        ]);
        $response->assertStatus(403);
    }

    /** @test */
    public function if_an_old_password_hash_is_used_and_login_is_correct_the_password_hash_gets_updated()
    {
        $password = "abcd1234";
        $oldPasswordHash = (new WpPasswordAuthentication(8, true))->HashPassword($password);
        $newPasswordHash = \Hash::make($password);

        $user = $this->getActivatedUser(['password' => $oldPasswordHash]);

        $response = $this->json('POST', '/api/v1/user/login', [
            'email' => $user->email,
            'password' => $password
        ]);

        $response->assertStatus(200);
        $response->assertJson($user->toArray());

        // Background information: Wordpress-Hash begins with $P$
        $this->assertEquals('$2y$10$', substr(User::first()->password, 0, 7));
    }

    /** @test */
    public function there_is_the_option_to_send_a_password_forgotten_mail_to_the_user()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('POST', '/api/v1/user/password/reset', [
            'email' => $user->email
        ]);

        $response->assertStatus(200);
        Notification::assertSentTo($user, forgotpasswordmail::class);
    }

    /** @test */
    public function if_the_user_does_not_exist_or_is_not_active_no_passwort_reset_mail_is_sent()
    {
        $response = $this->json('POST', '/api/v1/user/password/reset', [
            'email' => 'does@not.exist'
        ]);

        $response->assertStatus(200);
        Notification::assertNothingSent();
    }

    /** @test */
    public function the_password_reset_request_validates_correctly()
    {
        $response = $this->json('POST', '/api/v1/user/password/reset');
        $response->assertStatus(422);

        $response = $this->json('POST', '/api/v1/user/password/reset', [
            'email' => 'invalidFormat'
        ]);
        $response->assertStatus(422);
    }

    /**
     * Returns an activated User.
     *
     * @param array $attributes
     * @return App\User
     */
    protected function getActivatedUser($attributes = [])
    {
        return factory(User::class)->create(array_merge($attributes, ['active' => true]));
    }
}
