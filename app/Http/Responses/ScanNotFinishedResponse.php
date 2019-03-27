<?php

namespace App\Http\Responses;

use App\Scan;


class ScanNotFinishedResponse
{
    public function __construct(Scan $scan)
    {
        return $scan;
    }
}
