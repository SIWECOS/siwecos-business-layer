<?php

namespace App\Http\Controllers;

use App\CoreAPI;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\CreateUserRequestCaptcha;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\GetTokenByUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\ProcessForgotPasswordRequest;
use App\Http\Requests\UpdateUserCreditsRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Notifications\activationmail;
use App\Notifications\forgotpasswordmail;
use App\Siweocs\Models\UserTokenResponse;
use App\User;
use GuzzleHttp\Exception\RequestException;
use Hash;
use Illuminate\Database\QueryException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Keygen\Keygen;
use Swagger\Annotations as SWG;

class SiwecosUserController extends Controller
{
    public $coreApi;

    public function __construct()
    {
        $this->coreApi = new CoreApiController();
    }


    public function createCaptcha(CreateUserRequestCaptcha $request)
    {
        $newUser = new User($request->toArray());
        $newUser->password = self::createPassword($request->input('password'));
        $newUser->activation_key = Keygen::alphanum(96)->generate();
        $response = $this->coreApi->CreateUserToken(50);

        if ($response instanceof RequestException) {
            $responseText = json_decode($response->getResponse()->getBody());

            throw new HttpResponseException(response()->json($responseText, $response->getCode()));
        }
        $newUser->token = $response['token'];

        try {
            $newUser->save();
            $newUser->notify(new activationmail($newUser->activation_key));
        } catch (QueryException $queryException) {
            return response('Database error' . $queryException->getMessage(), 500);
        }

        $response = new UserTokenResponse($newUser);

        return response()->json($response);
    }

    public function getTokenByEmail(GetTokenByUserRequest $request)
    {
        $tokenUser = User::where('email', $request->json('email'))->first();
        if ($tokenUser instanceof User) {
            return response()->json(new UserTokenResponse($tokenUser));
        }

        return response('User not found', 404);
    }

    public function getUserInfoByToken(Request $request)
    {
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            return response()->json($tokenUser);
        }

        return response('User not Found', 404);
    }

    public function deleteUserInformation(Request $request)
    {
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            $response = $this->coreApi->RevokeToken($userToken);
            if ($response instanceof RequestException) {
                return response($response->getMessage(), 500);
            }
            $tokenUser->delete();

            return response('User deleted', 200);
        }

        return response('User not Found', 404);
    }

    public function getUserCreditInfoByToken(Request $request)
    {
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            $response = $this->coreApi->GetTokenCredits($userToken);
            if ($response instanceof RequestException) {
                $responseText = json_decode($response->getResponse()->getBody());

                throw new HttpResponseException(response()->json($responseText, $response->getCode()));
            }

            return $response;
        }

        return response('User not Found', 404);
    }

    public function updateUserInfo(UpdateUserRequest $request)
    {
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            $tokenUser->update($request->toArray());

            if ($request->input('newpassword')) {
                $tokenUser->password = self::createPassword($request->input('newpassword'));
            }

            $tokenUser->save();

            return response()->json($tokenUser);
        }

        return response('User not Found', 404);
    }

    public function updateCredits(UpdateUserCreditsRequest $request)
    {
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            $response = $this->coreApi->UpdateTokenCredits($userToken, $request->credits);
            if ($response instanceof RequestException) {
                $responseText = json_decode($response->getResponse()->getBody());

                throw new HttpResponseException(response()->json($responseText, $response->getCode()));
            }

            return $response;
        }

        return response('User not Found', 404);
    }
}
