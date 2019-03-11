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

class DomainController extends Controller
{
    public function __construct(HTTPClient $client)
    {
        $this->client = $client;
    }

    public function create(CreateDomainRequest $request)
    {
        $token = Token::whereToken($request->header('SIWECOS-Token'))->first();
        $domain = $token->domains()->make($request->validated());
        $domain->verification_token = Keygen::alphanum(64)->generate();
        if ($domain->save()) {
            return response('Domain created', 200);
        }

        return response('Domain was not created.', 410);
    }

    public function verify(VerifyDomainRequest $request)
    {
        $domain = Domain::whereUrl($request->json('url'))->first();
        $verifier = new DomainVerifier($domain, $this->client);

        if ($verifier->verify()) {
            if ($domain->update(['is_verified' => true])) {
                return response('Domain verified.', 200);
            }
        }

        return response('Domain could not be verified.', 410);
    }
}
