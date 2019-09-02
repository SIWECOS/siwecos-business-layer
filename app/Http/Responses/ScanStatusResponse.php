<?php

namespace App\Http\Responses;

use App\Scan;


class ScanStatusResponse
{
    public function __construct(Scan $scan)
    {
        $this->status = $scan->status;
        $this->has_error = $scan->has_error;
        $this->started_at = $scan->started_at ? $scan->started_at->toIso8601ZuluString() : null;
        $this->finished_at = $scan->finished_at ? $scan->finished_at->toIso8601ZuluString() : null;
    }
}
