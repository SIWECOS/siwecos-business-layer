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
use App\Http\Responses\UserTokenResponse;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        Notification::fake();
    }

    /** @test */
    public function an_activated_user_can_login_to_siwecos_bla_with_correct_credentials()
    {
        $user = $this->getActivatedUser(['password' => \Hash::make('abcd1234')]);

        $response = $this->json('POST', '/api/v2/user/login', [
            'email' => $user->email,
            'password' => 'abcd1234'
        ]);

        $response->assertStatus(200);

        $response->assertExactJson((array)(new UserTokenResponse(User::first())));
    }

    /** @test */
    public function login_is_not_possible_if_the_credentials_are_not_correct()
    {
        $response = $this->json('POST', '/api/v2/user/login', [
            'email' => 'not@existing.com',
            'password' => 'abcd1234'
        ]);
        $response->assertStatus(403);


        $response = $this->json('POST', '/api/v2/user/login', [
            'password' => 'email field is missing'
        ]);
        $response->assertStatus(422);


        $user = $this->getActivatedUser(['password' => \Hash::make('abcd1234')]);
        $response = $this->json('POST', '/api/v2/user/login', [
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

        $user = $this->getActivatedUser(['password' => $oldPasswordHash]);

        $response = $this->json('POST', '/api/v2/user/login', [
            'email' => $user->email,
            'password' => $password
        ]);

        $response->assertStatus(200);
        $response->assertExactJson((array)(new UserTokenResponse(User::first())));

        // Background information: Wordpress-Hash begins with $P$
        $this->assertEquals('$2y$10$', substr(User::first()->password, 0, 7));
    }

    /** @test */
    public function there_is_the_option_to_send_a_password_forgotten_mail_to_the_user()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('POST', '/api/v2/user/password/sendResetMail', [
            'email' => $user->email
        ]);

        $response->assertStatus(200);
        Notification::assertSentTo($user, forgotpasswordmail::class);
    }

    /** @test */
    public function if_the_user_does_not_exist_or_is_not_active_no_passwort_reset_mail_is_sent()
    {
        $response = $this->json('POST', '/api/v2/user/password/sendResetMail', [
            'email' => 'does@not.exist'
        ]);

        $response->assertStatus(200);
        Notification::assertNothingSent();
    }

    /** @test */
    public function the_password_senResetMailRequest_validates_correctly()
    {
        $response = $this->json('POST', '/api/v2/user/password/sendResetMail');
        $response->assertStatus(422);

        $response = $this->json('POST', '/api/v2/user/password/sendResetMail', [
            'email' => 'invalidFormat'
        ]);
        $response->assertStatus(422);
    }

    /** @test */
    public function the_password_can_be_reset_if_valid_data_is_sent()
    {
        $user = $this->getActivatedUser(['passwordreset_token' => 'ABCD']);

        $response = $this->json('POST', '/api/v2/user/password/reset', [
            'reset_token' => $user->passwordreset_token,
            'newpassword' => 'WXYZ0987'
        ]);

        $response->assertStatus(200);
        $this->assertTrue(\Hash::check('WXYZ0987', User::first()->password));
        $this->assertNull(User::first()->passwordreset_token);
    }

    /** @test */
    public function the_password_can_not_be_reset_if_invalid_data_is_sent()
    {
        $user = $this->getActivatedUser(['passwordreset_token' => 'ABCD']);

        $response = $this->json('POST', '/api/v2/user/password/reset', [
            'reset_token' => $user->passwordreset_token,
            // 'newpassword' => 'WXYZ0987'
        ]);
        $response->assertStatus(422);


        $response = $this->json('POST', '/api/v2/user/password/reset', [
            // 'reset_token' => $user->passwordreset_token,
            'newpassword' => 'WXYZ0987'
        ]);
        $response->assertStatus(422);


        $response = $this->json('POST', '/api/v2/user/password/reset', [
            'reset_token' => 'WRONG_TOKEN',
            'newpassword' => 'WXYZ0987'
        ]);
        $response->assertStatus(404);
    }
}
