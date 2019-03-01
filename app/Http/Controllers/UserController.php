<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\CreateUserRequest;
use App\Notifications\activationmail;
use Keygen\Keygen;
use App\Token;
use App\Siweocs\Models\UserTokenResponse;
use App\Http\Requests\ResendActivationMailRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Notifications\forgotpasswordmail;

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
        $regularToken = Token::create(['credits' => 50]);

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
            if (!$user->active) {
                $user->active = true;
                $user->save();

                return response()->json($user);
            }

            return response('User already activated', 410);
        }

        return response('User not found.', 404);
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

        if (!$user->active) {
            $user->active = true;
            $user->save();

            $user->notify(new activationmail());

            return response('Mail sent', 200);
        }

        return response('User already activated', 410);
    }

    /**
     * User login with correct credentials.
     *
     * @param UserLoginRequest $request
     * @return \Response
     */
    public function login(UserLoginRequest $request)
    {
        $user = User::whereEmail($request->json('email'))->whereActive(true)->first();

        if ($user && $user->verifyPassword($request->json('password'))) {
            return response()->json($user);
        }

        return response('Wrong credentials', 403);
    }

    public function sendPasswordResetMail(ResetPasswordRequest $request)
    {
        $user = User::whereEmail($request->json('email'))->whereActive(true)->first();

        if ($user) {
            $user->passwordreset_token = Keygen::alphanum(96)->generate();
            $user->save();
            $user->notify(new forgotpasswordmail($user->passwordreset_token));
        }

        return response('If the user exists in our records, the mail was sent.', 200);
    }
}
