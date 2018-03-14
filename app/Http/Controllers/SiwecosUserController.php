<?php

namespace App\Http\Controllers;

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

    var $coreApi;

    public function __construct()
    {
        $this->coreApi = new CoreApiController();
    }

    /**
     * @param CreateUserRequest $request
     * @return UserTokenResponse|mixed
     * @SWG\Post(
     *   path="/users/create",
     *   summary="create user",
     *   operationId="create",
     *   tags={"users"},
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     name="CreateUserParameters",
     *     in="body",
     *     required=true,
     *     @SWG\Schema(
     *     ref="#/definitions/CreateUserRequest"
     *     )
     *   ),
     *   @SWG\Response(
     *     response=200,
     *     description="Email and usertoken"
     *   ),
     *   @SWG\Response(
     *     response=500,
     *     description="Database or Core Api Error"
     *   )
     * )
     *
     */
    public function create(CreateUserRequest $request)
    {
        $newUser = new User($request->toArray());
        $password = $newUser->password;
        $newUser->password = Hash::make($password);
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

    public function resendActivationMail(GetTokenByUserRequest $request){
	    $tokenUser = User::where('email', $request->json('email'))->first();
		if ($tokenUser instanceof User){
			if (!$tokenUser->active){
				$tokenUser->notify(new activationmail($tokenUser->activation_key));
				return response('Mail sent', 200);
			}
			return response('User already activated', 400);
		}
		return response('User not found', 400);
    }

	public function createCaptcha(CreateUserRequestCaptcha $request)
	{
		$newUser = new User($request->toArray());
		$newUser->password = Hash::make($request->input('password'));
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

    public function loginUser(LoginUserRequest $request){
        $loggedInUser = User::where(['email'=>$request->json('email')])->first();
        $password = $request->json('password');
        if ($loggedInUser instanceof User && Hash::check($password, $loggedInUser->password)){
            return response()->json($loggedInUser);
        }
        return response("Wrong credentials", 403);
    }

    public function activateUser(Request $request)
    {
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            $tokenUser->active = 1;
            $tokenUser->save();
            return response()->json($tokenUser);
        }
        return response("User not found", 404);
    }

    public function activateUserUrl(string $activation_key)
    {
        if (!$activation_key) {
            return response("Invalid activation key", 403);
        }

        $tokenUser = User::where('activation_key', $activation_key)->first();
        if ($tokenUser instanceof User) {
            $tokenUser->active = 1;
            $tokenUser->activation_key = "";

            $tokenUser->save();

            return redirect(config('app.activation_redirect_uri'));
        }
        return response("User not found", 404);
    }

    public function getTokenByEmail(GetTokenByUserRequest $request)
    {
        $tokenUser = User::where('email', $request->json('email'))->first();
        if ($tokenUser instanceof User) {
            return response()->json(new UserTokenResponse($tokenUser));
        }
        return response("User not found", 404);
    }

    public function getUserInfoByToken(Request $request)
    {
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            return response()->json($tokenUser);
        }
        return response("User not Found", 404);
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
        return response("User not Found", 404);
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
        return response("User not Found", 404);
    }

    public function updateUserInfo(UpdateUserRequest $request)
    {
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            $tokenUser->update($request->toArray());

            if ($request->input('newpassword')) {
                $tokenUser->password = Hash::make($request->input('newpassword'));
            }

            $tokenUser->save();
            return response()->json($tokenUser);
        }
        return response("User not Found", 404);
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
        return response("User not Found", 404);
    }

    public function sendForgotPasswordMail(ForgotPasswordRequest $request)
    {
        $user = User::where('email', $request->input('email'))->first();

        if ($user instanceof User) {
            $user->passwordreset_token = Keygen::alphanum(96)->generate();
            $user->save();
            $user->notify(new forgotpasswordmail($user->passwordreset_token));

            return response('Send', 200);
        }

        return response("User not Found", 404);
    }

    public function processForgotPasswordRequest(ProcessForgotPasswordRequest $request)
    {
        $user = User::where('email', $request->input('email'))
            ->where('passwordreset_token', $request->input('token'))
            ->first();

        if ($user instanceof User) {
            $user->password = Hash::make($request->input('newpassword'));
            $user->save();

            return response('Reset completed', 200);
        }

        return response("User not Found", 404);
    }
}
