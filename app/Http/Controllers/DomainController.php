<?php

namespace App\Http\Controllers;

use App\Domain;
use Illuminate\Http\Request;
use App\Http\Requests\CreateDomainRequest;
use App\Token;
use App\Http\Requests\VerifyDomainRequest;
use App\DomainVerifier;
use Keygen\Keygen;

class DomainController extends Controller
{
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
        $verifier = new DomainVerifier(Domain::whereUrl($request->json('url'))->first());

        if ($verifier->verify()) {
            return response('Domain verified.', 200);
        }

        return response('Domain could not be verified.', 404);
    }
}
