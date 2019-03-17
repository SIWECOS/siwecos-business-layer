<?php

namespace App\Http\Responses;

use Illuminate\Database\Eloquent\Collection;


class DomainListResponse
{
    /**
     * @var Collection
     */
    public $domains;

    public function __construct(Collection $domains)
    {
        $this->domains = $domains;
    }
}

