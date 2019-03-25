<?php

namespace App\Http\Controllers;

use App\Domain;
use Illuminate\Http\Request;
use App\Http\Requests\CreateDomainRequest;
use App\Token;
use App\Http\Requests\VerifyDomainRequest;
use App\DomainVerifier;
use Keygen\Keygen;
use App\HTTPClient;
use App\Http\Requests\DeleteDomainRequest;
use App\Http\Responses\DomainListResponse;
use App\Http\Responses\StatusResponse;
use App\Http\Responses\DomainResponse;

class DomainController extends Controller
{
    public function __construct(HTTPClient $client)
    {
        $this->client = $client;
    }

    public function create(CreateDomainRequest $request)
    {
        $token = Token::whereToken($request->header('SIWECOS-Token'))->first();

        $domain = Domain::whereUrl($request->json('url'))->firstOrNew($request->validated());

        if (!$domain->is_verified) {
            $domain->verification_token = Keygen::alphanum(64)->generate();
            $domain->token()->associate($token);

            if ($domain->save()) {
                return response()->json(new DomainResponse($domain), 200);
            }

            return response()->json(new StatusResponse('Domain was not created'), 410);
        }

        return response()->json(new StatusResponse('Domain is already verified'), 403);
    }

    public function verify(VerifyDomainRequest $request)
    {
        $domain = Domain::whereUrl($request->json('url'))->first();

        if (!$domain->is_verified) {
            $verifier = new DomainVerifier($domain, $this->client);

            if ($verifier->verify()) {
                if ($domain->update(['is_verified' => true])) {
                    return response()->json(new DomainResponse($domain), 200);
                }
            }
            return response()->json(new StatusResponse('Domain could not be verified'), 410);
        }

        return response()->json(new StatusResponse('Domain is already verified'), 403);
    }

    public function list(Request $request)
    {
        $domains = Token::whereToken($request->header('SIWECOS-Token'))->first()->domains;

        return response()->json(new DomainListResponse($domains));
    }

    public function delete(DeleteDomainRequest $request)
    {
        $token = Token::whereToken($request->header('SIWECOS-Token'))->first();
        $domain = $token->domains()->whereUrl($request->json('url'))->first();

        if ($domain && $domain->delete()) {
            return response()->json(new StatusResponse('Domain deleted'), 200);
        }

        return response()->json(new StatusResponse('Forbidden'), 403);
    }
}
