<?php

namespace App\Siweocs\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class UserTokenResponse{
    var $token;
    var $email;

    public function __construct(User $user)
    {
        $this->token = $user->token;
        $this->email = $user->email;
    }
}