<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\activationmail;
use App\Token;

class UserRegistrationTest extends TestCase
{

    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();
        Notification::fake();
    }

    /** @test */
    public function a_new_user_can_be_registered_via_api()
    {
        $this->withoutExceptionHandling();

        $response = $this->registerUserRequest();

        $response->assertStatus(200);
        $this->assertEquals(1, User::all()->count());
    }

    /** @test */
    public function the_create_user_request_gets_validated_and_has_required_fields()
    {
        $response = $this->json('POST', '/api/v1/user', ['password' => 'secret']);

        $response->assertStatus(422);
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
        $response->assertExactJson([
            'email' => User::first()->email,
            'token' => User::first()->token->token
        ]);
    }

    /** @test */
    public function a_new_user_is_automatically_not_activated_when_created_via_api()
    {
        $this->registerUserRequest();

        $this->assertFalse(User::first()->active);
    }

    /** @test */
    public function after_registering_a_new_user_the_user_will_get_an_activation_mail()
    {
        $this->registerUserRequest();

        Notification::assertSentTo(User::first(), activationmail::class);
    }

    /** @test */
    public function the_user_can_be_activated_by_clicking_on_the_activation_link()
    {
        $this->registerUserRequest();
        $user = User::first();

        $this->assertFalse($user->active);

        $response = $this->get('/api/v1/user/activate/' . $user->activation_key);

        $response->assertStatus(200);
        $this->assertTrue(User::first()->active);
    }

    /** @test */
    public function the_user_object_gets_returned_after_activating_the_user()
    {
        $response = $this->registerAndActivateUserRequest();

        $response->assertStatus(200);
        $response->assertJson(User::first()->toArray());
    }

    /** @test */
    public function an_error_status_code_will_be_returned_when_the_activationKey_is_invalid()
    {
        $response = $this->get('/api/v1/user/activate/INVALID_KEY');

        $response->assertStatus(404);
    }

    /** @test */
    public function an_error_status_code_will_be_returned_when_the_user_is_already_activated()
    {
        $this->registerAndActivateUserRequest();

        $response = $this->get('/api/v1/user/activate/' . User::first()->activation_key);

        $response->assertStatus(410);
    }

    /** @test */
    public function the_activation_mail_can_be_resend()
    {
        $this->registerUserRequest();
        $user = User::first();

        $response = $this->json('POST', '/api/v1/user/activate/resend', [
            'email' => $user->email
        ]);

        $response->assertStatus(200);
        Notification::assertSentToTimes($user, activationmail::class, 2);
    }

    /** @test */
    public function the_activation_mail_can_only_be_resend_if_valid_data_is_provided()
    {
        $response = $this->json('POST', '/api/v1/user/activate/resend');
        $response->assertStatus(422);

        $response = $this->json('POST', '/api/v1/user/activate/resend', [
            'email' => 'not@existing.com'
        ]);
        $response->assertStatus(422);

        $response = $this->json('POST', '/api/v1/user/activate/resend', [
            'email' => 'invalidFormat'
        ]);
        $response->assertStatus(422);
    }

    /** @test */
    public function the_activation_mail_can_not_be_sent_to_already_activated_users()
    {
        $this->registerAndActivateUserRequest();
        $user = User::first();

        $response = $this->json('POST', '/api/v1/user/activate/resend', [
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

        return $this->json('POST', '/api/v1/user', array_merge($user->toArray(), ['password' => 'secret1234']));
    }

    /**
     * Send API-Requests to register and activate a new user.
     *
     * @return \Illuminate\Foundation\Testing\TestResponse
     */
    public function registerAndActivateUserRequest()
    {
        $this->registerUserRequest();

        return $this->get('/api/v1/user/activate/' . User::first()->activation_key);
    }
}
