<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\activationmail;

class ModifyUserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_change_his_details()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('PATCH', '/api/v2/user', [
            'first_name' => 'Albert',
            'last_name' => 'Einstein',
        ], ['userToken' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertEquals('Albert', User::first()->first_name);
        $this->assertEquals('Einstein', User::first()->last_name);
    }

    /** @test */
    public function without_the_correct_userToken_header_no_changes_are_possible()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('PATCH', '/api/v2/user', [
            'first_name' => 'Albert'
        ]);

        $response->assertStatus(403);
    }

    /** @test */
    public function a_not_activated_user_can_not_change_his_details()
    {
        $user = factory(User::class)->create();

        $response = $this->json('PATCH', '/api/v2/user', [
            'first_name' => 'Albert'
        ], ['userToken' => $user->token->token]);

        $response->assertStatus(403);
    }

    /** @test */
    public function a_user_can_not_have_the_same_email_address_as_another_user()
    {
        $user1 = $this->getActivatedUser();
        $user2 = $this->getActivatedUser();

        $response = $this->json('PATCH', '/api/v2/user', [
            'email' => $user2->email
        ], ['userToken' => $user1->token->token]);

        $response->assertStatus(422);
    }

    /** @test */
    public function a_user_can_change_his_password()
    {
        $user = $this->getActivatedUser(['password' => \Hash::make('superSecretPassword')]);

        $response = $this->json('PATCH', '/api/v2/user', [
            'newpassword' => 'abcd1234'
        ], ['userToken' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertTrue(\Hash::check('abcd1234', User::first()->password));
    }

    /** @test */
    public function a_user_can_change_his_email_address_and_has_to_reactivate_his_account()
    {
        Notification::fake();
        $user = $this->getActivatedUser();

        $response = $this->json('PATCH', '/api/v2/user', [
            'email' => 'another@email.address'
        ], ['userToken' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertEquals('another@email.address', User::first()->email);
        Notification::assertSentTo($user, activationmail::class);
        $this->assertFalse(User::first()->active);
    }

    /** @test */
    public function a_user_can_delete_his_account_and_the_associated_token_gets_also_deleted()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('DELETE', '/api/v2/user', [], [
            'userToken' => $user->token->token
        ]);

        $response->assertStatus(200);
        $this->assertCount(0, User::all());
    }

    /** @test */
    public function a_non_existing_user_can_not_be_deleted()
    {
        $response = $this->json('DELETE', '/api/v2/user', [], [
            'userToken' => 'XYZABC123'
        ]);

        $response->assertStatus(403);
    }

    /** @test */
    public function a_not_activated_user_can_not_delete_himself()
    {
        $user = factory(User::class)->create();

        $response = $this->json('DELETE', '/api/v2/user', [], [
            'userToken' => $user->token->token
        ]);

        $response->assertStatus(403);
    }
}
