<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewDomainRequest;
use App\Http\Requests\DeleteDomainRequest;
use App\Http\Requests\VerifyDomainRequest;
use App\User;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

/**
 * Class SiweocsDomainController.
 */
class SiwecosDomainController extends Controller
{
    public $coreApi;

    /**
     * @param DeleteDomainRequest $request
     *
     * @return \Exception|RequestException|\Illuminate\Contracts\Routing\ResponseFactory|mixed|\Symfony\Component\HttpFoundation\Response
     */
    public function deleteDomain(DeleteDomainRequest $request)
    {
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            $response = $this->coreApi->DeleteDomain($userToken, $request->get('domain'));

            if ($response instanceof RequestException) {
                $responseText = json_decode($response->getResponse()->getBody());
                \Log::critical($response);

                throw new HttpResponseException(response()->json($responseText, $response->getCode()));
            }

            return $response;
        }

        return response('User not Found', 404);
    }

    /**
     * @param Request $request
     *
     * @return \Exception|RequestException|\Illuminate\Contracts\Routing\ResponseFactory|mixed|\Symfony\Component\HttpFoundation\Response
     */
    public function getDomainList(Request $request)
    {
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            $response = $this->coreApi->GetDomains($userToken);
            if ($response instanceof RequestException) {
                $responseText = json_decode($response->getResponse()->getBody());

                throw new HttpResponseException(response()->json($responseText, $response->getCode()));
            }

            return $response;
        }

        return response('User not Found', 404);
    }
}
