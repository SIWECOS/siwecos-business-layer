<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\activationmail;

class UserRegistrationTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function a_new_user_can_be_registered_via_api()
    {
        $response = $this->registerUserRequest();

        $response->assertStatus(200);
        $this->assertEquals(1, User::all()->count());
    }

    /** @test */
    public function the_create_user_request_gets_validated_and_has_required_fields()
    {
        $response = $this->json('POST', '/api/v2/user', ['password' => 'secret']);

        $response->assertStatus(422);
    }

    /** @test */
    public function the_agbCheck_flag_must_be_true_in_order_to_register_a_new_user()
    {
        $response = $this->json('POST', '/api/v2/user', [
            'email'        => 'mail@example.org',
            'password' => 'secret1234'
        ]);
        $response->assertStatus(422);
        $response->assertJson([
            'agb_check' => ['validation.required']
        ]);

        $response = $this->json('POST', '/api/v2/user', [
            'email'        => 'mail@example.org',
            'password' => 'secret1234',
            'agb_check' => 'yesIWantIt'
        ]);
        $response->assertStatus(422);
        $response->assertJson([
            'agb_check' => ['validation.boolean']
        ]);

        $response = $this->json('POST', '/api/v2/user', [
            'email'        => 'mail@example.org',
            'password' => 'secret1234',
            'agb_check' => false
        ]);
        $response->assertStatus(422);
        $response->assertJson([
            'agb_check' => ['The user must accept the General Terms and Conditions to use this service.']
        ]);
    }

    /** @test */
    public function a_new_user_automatically_gets_a_standard_token()
    {
        $this->registerUserRequest();

        $this->assertNotNull(User::first()->token);
        $this->assertEquals(50, User::first()->token->credits);
        $this->assertEquals('regular', User::first()->token->type);
    }

    /** @test */
    public function when_a_new_user_was_successfully_registered_the_defined_response_will_be_retrieved()
    {
        $response = $this->registerUserRequest();

        $response->assertStatus(200);
        $response->assertJson([
            'email' => User::first()->email,
            'token' => User::first()->token->token
        ]);
    }

    /** @test */
    public function a_new_user_is_automatically_not_activated_when_created_via_api()
    {
        $this->registerUserRequest();

        $this->assertFalse(User::first()->is_active);
    }

    /** @test */
    public function after_registering_a_new_user_the_user_will_get_an_activation_mail()
    {
        $this->registerUserRequest();

        Notification::assertSentTo(User::first(), activationmail::class);
    }

    /** @test */
    public function the_user_can_be_activated_by_clicking_on_the_activation_link_and_gets_redirected()
    {
        $this->registerUserRequest();
        $user = User::first();

        $this->assertFalse($user->is_active);

        $response = $this->get('/api/v2/user/activate/' . $user->activation_key);

        $response->assertRedirect(config('siwecos.activation_redirect_uri'));
        $this->assertTrue(User::first()->is_active);
        $this->assertNotNull(User::first()->token);
    }

    /** @test */
    public function an_error_status_code_will_be_returned_when_the_activationKey_is_invalid()
    {
        $response = $this->get('/api/v2/user/activate/INVALID_KEY');

        $response->assertStatus(404);
    }

    /** @test */
    public function an_error_status_code_will_be_returned_when_the_user_is_already_activated()
    {
        $this->registerAndActivateUserRequest();

        $response = $this->get('/api/v2/user/activate/' . User::first()->activation_key);

        $response->assertStatus(410);
    }

    /** @test */
    public function the_activation_mail_can_be_resend()
    {
        $this->registerUserRequest();
        $user = User::first();

        $response = $this->json('POST', '/api/v2/user/activate/resend', [
            'email' => $user->email
        ]);

        $response->assertStatus(200);
        Notification::assertSentToTimes($user, activationmail::class, 2);
    }

    /** @test */
    public function the_activation_mail_can_only_be_resend_if_valid_data_is_provided()
    {
        $response = $this->json('POST', '/api/v2/user/activate/resend');
        $response->assertStatus(422);

        $response = $this->json('POST', '/api/v2/user/activate/resend', [
            'email' => 'not@existing.com'
        ]);
        $response->assertStatus(422);

        $response = $this->json('POST', '/api/v2/user/activate/resend', [
            'email' => 'invalidFormat'
        ]);
        $response->assertStatus(422);
    }

    /** @test */
    public function the_activation_mail_can_not_be_sent_to_already_activated_users()
    {
        $this->registerAndActivateUserRequest();
        $user = User::first();

        $response = $this->json('POST', '/api/v2/user/activate/resend', [
            'email' => $user->email
        ]);
        $response->assertStatus(410);

        Notification::assertSentToTimes($user, activationmail::class, 1);
    }


    /**
     * Send an API-Request to register a new user.
     *
     * @return \Illuminate\Foundation\Testing\TestResponse
     */
    public function registerUserRequest()
    {
        $user = factory(User::class)->make();

        return $this->json('POST', '/api/v2/user', array_merge($user->toArray(), ['password' => 'secret1234', 'agb_check' => true]));
    }

    /**
     * Send API-Requests to register and activate a new user.
     *
     * @return \Illuminate\Foundation\Testing\TestResponse
     */
    public function registerAndActivateUserRequest()
    {
        $this->registerUserRequest();

        return $this->get('/api/v2/user/activate/' . User::first()->activation_key);
    }
}
