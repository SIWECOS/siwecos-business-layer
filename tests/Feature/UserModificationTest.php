<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\activationmail;
use App\Notifications\ChangedMailNotification;
use App\Token;

class UserModificationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function without_the_correct_userToken_header_no_changes_are_possible()
    {
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
            'newpassword' => 'Albert'
        ], ['SIWECOS-Token' => $user->token->token]);

        $response->assertStatus(403);
    }

    /** @test */
    public function a_user_can_not_have_the_same_email_address_as_another_user()
    {
        $user1 = $this->getActivatedUser();
        $user2 = $this->getActivatedUser();

        $response = $this->json('PATCH', '/api/v2/user', [
            'email' => $user2->email
        ], ['SIWECOS-Token' => $user1->token->token]);

        $response->assertStatus(422);
    }

    /** @test */
    public function a_user_can_change_his_password()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('PATCH', '/api/v2/user', [
            'newpassword' => 'abcd1234'
        ], ['SIWECOS-Token' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertTrue(\Hash::check('abcd1234', User::first()->password));
    }

    /** @test */
    public function a_user_can_change_his_email_address_and_has_to_activate_the_new_account_while_the_old_stays_usable()
    {
        $user = $this->getActivatedUser();
        $changedMailUser = factory(User::class)->make();
        $changedMailUser->token()->associate($user->token);
        $changedMailUser->save();

        $this->assertCount(2, User::all());

        $response = $this->get('/api/v2/user/activate/' . $changedMailUser->activation_key);

        $response->assertRedirect(config('siwecos.activation_redirect_uri'));
        $this->assertTrue(User::find(2)->is_active);
        $this->assertNotNull(User::find(2)->token);
        $this->assertNull(User::find(1)->token);
        $this->assertEquals(Token::find(1), User::find(2)->token);
        $this->assertEquals(Token::find(1)->user, User::find(2));
    }

    /** @test */
    public function when_a_user_activates_his_second_account_with_the_new_mail_address_the_old_account_will_be_deleted()
    {
        $user = $this->getActivatedUser();
        $response = $this->json('PATCH', '/api/v2/user', [
            'email' => 'another@email.address'
        ], ['SIWECOS-Token' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertNotEquals('another@email.address', User::first()->email);
        $this->assertTrue($user->is_active);

        $newUser = User::whereEmail('another@email.address')->first();
        $this->assertNotEmpty($newUser);
        Notification::assertSentTo($newUser, ChangedMailNotification::class);
        $this->assertFalse($newUser->is_active);
    }

    /** @test */
    public function a_user_can_delete_his_account_and_the_associated_token_gets_also_deleted()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('DELETE', '/api/v2/user', [], [
            'SIWECOS-Token' => $user->token->token
        ]);

        $response->assertStatus(200);
        $this->assertCount(0, User::all());
    }

    /** @test */
    public function a_non_existing_user_can_not_be_deleted()
    {
        $response = $this->json('DELETE', '/api/v2/user', [], [
            'SIWECOS-Token' => 'XYZABC123'
        ]);

        $response->assertStatus(403);
    }

    /** @test */
    public function a_not_activated_user_can_not_delete_himself()
    {
        $user = factory(User::class)->create();

        $response = $this->json('DELETE', '/api/v2/user', [], [
            'SIWECOS-Token' => $user->token->token
        ]);

        $response->assertStatus(403);
    }
}
