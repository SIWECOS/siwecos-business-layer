<?php

namespace App\Http\Responses;

use App\SiwecosScan;

class ScanStartedResponse
{
    public function __construct(SiwecosScan $scan)
    {
        $this->scan_id = $scan->id;
    }
}
