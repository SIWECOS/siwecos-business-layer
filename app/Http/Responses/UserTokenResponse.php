<?php

namespace App\Http\Responses;

use App\User;

class UserTokenResponse
{
    public $token;
    public $email;
    public $preferred_language;
    public $active;

    public function __construct(User $user)
    {
        $this->token = $user->token->token;
        $this->email = $user->email;
        $this->preferred_language = $user->preferred_language;
        $this->active = (boolean)$user->is_active;
    }
}
