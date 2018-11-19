<?php

namespace App;

use GuzzleHttp\Exception\RequestException;
use App\Http\Controllers\CoreApiController;
use Illuminate\Http\Exceptions\HttpResponseException;


class CoreAPI
{
    public static function generateUserToken(int $credits) {
        $coreAPI = new CoreApiController();

        $response = $coreAPI->CreateUserToken($credits);

        if ($response instanceof RequestException) {
            $responseText = json_decode($response->getResponse()->getBody());

            throw new HttpResponseException(response()->json($responseText, $response->getCode()));
        }

        return $response['token'];
    }
}
