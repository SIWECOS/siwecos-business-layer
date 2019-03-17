<?php

namespace App\Http\Responses;


class StatusResponse
{

    public $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }
}
