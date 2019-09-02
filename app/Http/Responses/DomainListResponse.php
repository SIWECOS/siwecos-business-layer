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
        $this->domains = collect();

        foreach ($domains as $domain) {
            $this->domains->push(new DomainResponse($domain));
        }
    }
}
