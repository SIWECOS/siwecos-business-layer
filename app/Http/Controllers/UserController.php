<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\CreateUserRequest;
use App\Notifications\activationmail;
use Keygen\Keygen;
use App\Token;

use App\Http\Requests\ResendActivationMailRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Notifications\forgotpasswordmail;
use App\Http\Requests\SendPasswordResetMailRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Responses\UserTokenResponse;
use App\Http\Responses\StatusResponse;
use App\Notifications\ChangedMailNotification;

class UserController extends Controller
{
    /**
     * Creates a new User in the database.
     *
     * @param CreateUserRequest $request
     * @return \Response
     */
    public function create(CreateUserRequest $request)
    {
        $regularToken = Token::create(['credits' => config('siwecos.defaultTokenCredits')]);

        $user = User::make($request->all());
        $user->password = \Hash::make($request->json('password'));
        $user->activation_key = Keygen::alphanum(96)->generate();

        $user->token()->associate($regularToken);

        if ($user->save()) {
            $user->notify(new activationmail());

            return response()->json(new UserTokenResponse($user));
        }
    }

    /**
     * Activates the user by clicking on the link provided by the activationmail.
     *
     * @param string $key
     * @return \Response
     */
    public function activate($key)
    {
        $user = User::whereActivationKey($key)->first();

        if ($user) {
            if (!$user->is_active) {
                // Check if user changed his account, so an oldUser owns the token
                // if so, remove the association between the oldUser and the token
                $oldUser = $user->token->user;
                if ($oldUser && $oldUser->id !== $user->id) {
                    $oldUser->token()->dissociate();
                    $oldUser->save();
                    $oldUser->delete();
                }

                $user->is_active = true;
                $user->save();

                return redirect(config('siwecos.activation_redirect_uri'));
            }

            return response()->json(new StatusResponse('User already activated'), 410);
        }

        return response()->json(new StatusResponse('User not found.'), 404);
    }

    /**
     * Resends the activation mail when requested.
     *
     * @param ResendActivationMailRequest $request
     * @return \Response
     */
    public function resendActivationMail(ResendActivationMailRequest $request)
    {
        $user = User::whereEmail($request->json('email'))->first();

        if (!$user->is_active) {
            $user->is_active = true;
            $user->save();

            $user->notify(new activationmail());

            return response()->json(new StatusResponse('Mail sent.'));
        }

        return  response()->json(new StatusResponse('User already activated'), 410);
    }

    /**
     * User login with correct credentials.
     *
     * @param UserLoginRequest $request
     * @return \Response
     */
    public function login(UserLoginRequest $request)
    {
        $user = User::whereEmail($request->json('email'))->first();

        if ($user instanceof User) {

            if ($user->is_active === false) {
                return response()->json(new StatusResponse('User not activated'), 406);
            }

            if ($user->token === null) {
                return response()->json(new StatusResponse('User without associated token'), 406);
            }

            if ($user->verifyPassword($request->json('password'))) {
                return response()->json(new UserTokenResponse($user));
            }
        }

        return response()->json(new StatusResponse('Wrong credentials'), 403);
    }

    /**
     * Sends the passwort reset mail when a valid user is in the records.
     * Sends also status code 200 if no user was found to minimize information gathering attacks.
     *
     * @param SendPasswordResetMailRequest $request
     * @return \Response
     */
    public function sendPasswordResetMail(SendPasswordResetMailRequest $request)
    {
        $user = User::whereEmail($request->json('email'))->whereIsActive(true)->first();

        if ($user) {
            $user->passwordreset_token = Keygen::alphanum(96)->generate();
            $user->save();
            $user->notify(new forgotpasswordmail($user->passwordreset_token));
        }

        return response()->json(new StatusResponse('If the user exists in our records, the mail was sent.'), 200);
    }

    /**
     * Reset the password to a new one
     *
     * @param ResetPasswordRequest $request
     * @return \Response
     */
    public function resetPassword(ResetPasswordRequest $request)
    {
        $user = User::wherePasswordresetToken($request->json('reset_token'))->whereIsActive(true)->first();

        if ($user) {
            $user->password = \Hash::make($request->json('newpassword'));
            $user->passwordreset_token = null;
            $user->save();

            return response()->json(new StatusResponse('Reset completed'), 200);
        }

        return response()->json(new StatusResponse('User not Found'), 404);
    }

    public function show(Request $request)
    {
        $user = Token::whereToken($request->header('SIWECOS-Token'))->first()->user;

        if ($user) {
            return response()->json(new UserTokenResponse($user));
        }

        return response()->json(new StatusResponse('User not Found'), 404);
    }

    /**
     * Updates an user.
     *
     * @param UpdateUserRequest $request
     * @return \Response
     */
    public function update(UpdateUserRequest $request)
    {
        $user = Token::whereToken($request->header('SIWECOS-Token'))->first()->user;
        $oldEmail = $user->email;

        // password
        if ($newpassword = $request->json('newpassword')) {
            $user->password = \Hash::make($newpassword);
        }

        // preferred language
        if ($preferred_language = $request->json('preferred_language')) {
            $user->preferred_language = $preferred_language;
        }

        // email
        if ($request->json('email') && $oldEmail != $request->json('email')) {
            $newUser = new User();
            $newUser->email = $request->json('email');
            $newUser->password = $user->password;
            $newUser->activation_key = Keygen::alphanum(96)->generate();
            $newUser->token()->associate($user->token);

            $newUser->save();

            $newUser->notify(new ChangedMailNotification());
        }

        if ($user->save()) {
            return response()->json(new StatusResponse('User updated'));
        }

        return response()->json(new StatusResponse('User could not be updated'), 410);
    }

    /**
     * Deletes an user.
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        $token = Token::whereToken($request->header('SIWECOS-Token'))->first();
        $token->user()->delete();
        $token->delete();

        return response()->json(new StatusResponse('User deleted'), 200);
    }
}
