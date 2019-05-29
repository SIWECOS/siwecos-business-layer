<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Token;

class TokenController extends Controller
{
    public function registerNewToken()
    {
        $token = Token::create([
            'credits' => config('siwecos.thirdPartyTokenCredits'),
            'type' => 'external'
        ]);

        return ['token' => $token->token];
    }
}
