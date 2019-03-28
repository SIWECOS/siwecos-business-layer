<?php

namespace App\Http\Responses;

use App\Scan;
use App\ScanReport;

class ScanReportResponse
{
    public function __construct(Scan $scan)
    {
        $this->status = $scan->status;
        $this->has_error = $scan->has_error;
        $this->started_at = $scan->started_at ? $scan->started_at->toDateTimeString() : null;
        $this->finished_at = $scan->finished_at ? $scan->finished_at->toDateTimeString() : null;

        if ($scan->is_finished && !$scan->has_error) {
            $this->report = new ScanReport($scan);
        }
    }
}
