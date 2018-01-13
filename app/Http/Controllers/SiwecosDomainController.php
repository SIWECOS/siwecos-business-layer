<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewDomainRequest;
use App\Http\Requests\DeleteDomainRequest;
use App\Http\Requests\VerifyDomainRequest;
use App\User;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Swagger\Annotations as SWG;

/**
 * Class SiweocsDomainController
 * @package App\Http\Controllers
 */
class SiwecosDomainController extends Controller
{

    var $coreApi;

    public function __construct()
    {
        $this->coreApi = new CoreApiController();
    }

    /**
     * @param CreateNewDomainRequest $request
     * @return \Exception|RequestException|\Illuminate\Contracts\Routing\ResponseFactory|mixed|\Symfony\Component\HttpFoundation\Response
     *
     */
    public function createNewDomain(CreateNewDomainRequest $request){
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            $response = $this->coreApi->CreateDomain($userToken, $request->domain, $request->danger_level);
            if ($response instanceof RequestException) {
                $responseText = json_decode($response->getResponse()->getBody());
                throw new HttpResponseException(response()->json($responseText, $response->getCode()));
            }
            return $response;
        }
        return response("User not Found", 404);
    }

    /**
     * @param DeleteDomainRequest $request
     * @return \Exception|RequestException|\Illuminate\Contracts\Routing\ResponseFactory|mixed|\Symfony\Component\HttpFoundation\Response
     */
    public function deleteDomain(DeleteDomainRequest $request){
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            $response = $this->coreApi->DeleteDomain($userToken, $request->domain);
            if ($response instanceof RequestException) {
                $responseText = json_decode($response->getResponse()->getBody());
                throw new HttpResponseException(response()->json($responseText, $response->getCode()));
            }
            return $response;
        }
        return response("User not Found", 404);
    }

    /**
     * @param Request $request
     * @return \Exception|RequestException|\Illuminate\Contracts\Routing\ResponseFactory|mixed|\Symfony\Component\HttpFoundation\Response
     */
    public function getDomainList(Request $request){
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
        return response("User not Found", 404);
    }

    /**
     * @param VerifyDomainRequest $request
     * @return \Exception|RequestException|\Illuminate\Contracts\Routing\ResponseFactory|mixed|\Symfony\Component\HttpFoundation\Response
     */
    public function verifyDomain(VerifyDomainRequest $request){
        $userToken = $request->header('userToken');
        $tokenUser = User::where('token', $userToken)->first();
        if ($tokenUser instanceof User) {
            $response = $this->coreApi->VerifyDomain($userToken, $request->domain);
            if ($response instanceof RequestException) {
                $responseText = json_decode($response->getResponse()->getBody());
                throw new HttpResponseException(response()->json($responseText, $response->getCode()));
            }
            return $response;
        }
        return response("User not Found", 404);
    }
}
