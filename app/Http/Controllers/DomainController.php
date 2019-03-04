<?php

namespace App\Http\Controllers;

use App\Domain;
use Illuminate\Http\Request;
use App\Http\Requests\CreateDomainRequest;
use App\Token;

class DomainController extends Controller
{
    public function create(CreateDomainRequest $request)
    {
        $token = Token::whereToken($request->header('userToken'))->first();
        $token->domains()->create($request->validated());
    }
}
