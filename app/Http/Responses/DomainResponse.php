<?php

namespace App\Http\Responses;

use App\Domain;
use App\Token;

class DomainResponse
{
    public function __construct(Domain $domain)
    {
        $this->domain = $domain->domain;
        $this->url = 'https://' . $domain->domain;
        $this->verification_token = Token::whereToken(request()->header('SIWECOS-Token'))->first()->verification_token;
        $this->is_verified = (bool) $domain->is_verified;
    }
}
