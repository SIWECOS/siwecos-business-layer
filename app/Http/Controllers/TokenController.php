<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Token;
use App\Http\Requests\TokenRegistrationRequest;

class TokenController extends Controller
{
    public function registerNewToken(TokenRegistrationRequest $request)
    {
        $token = Token::create([
            'type' => 'external'
        ]);

        return ['token' => $token->token];
    }
}
