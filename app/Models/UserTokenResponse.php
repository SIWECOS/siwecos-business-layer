<?php

namespace App\Siweocs\Models;

use App\User;

class UserTokenResponse
{
    public $token;
    public $email;

    public function __construct(User $user)
    {
        $this->token = $user->token->token;
        $this->email = $user->email;
    }
}
