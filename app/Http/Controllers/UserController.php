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
}
