<?php

namespace App\Http\Responses;

use App\Domain;


class DomainResponse
{
    public function __construct(Domain $domain)
    {
        $this->domain = $domain->domain;
        $this->url = $domain->mainUrl;
        $this->verification_token = $domain->verification_token;
        $this->is_verified = (bool) $domain->is_verified;
    }
}
