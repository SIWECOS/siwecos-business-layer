<?php

namespace App\Http\Responses;

use App\Scan;

class ScanStartedResponse
{
    public function __construct(Scan $scan)
    {
        $this->scan_id = $scan->id;
    }
}
