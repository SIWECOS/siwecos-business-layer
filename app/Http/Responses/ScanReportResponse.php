<?php

namespace App\Http\Responses;

use App\Scan;
use App\ScanReport;

class ScanReportResponse
{
    public function __construct(Scan $scan)
    {
        // A standard APIv2 Scan will always be the mainUrl Scan.
        // Consequential there will always be only one SiwecosScan
        $this->id = $scan->siwecosScans()->first()->id;

        $this->status = $scan->status;
        $this->has_error = $scan->has_error;
        $this->started_at = $scan->started_at ? $scan->started_at->toIso8601ZuluString() : null;
        $this->finished_at = $scan->finished_at ? $scan->finished_at->toIso8601ZuluString() : null;

        if ($scan->is_finished && $scan->status !== 'failed') {
            $this->score = $scan->score;
            $this->report = (new ScanReport($scan))->report;
        }
    }
}
