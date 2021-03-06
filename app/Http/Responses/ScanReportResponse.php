<?php

namespace App\Http\Responses;

use App\Scan;
use App\ScanReport;

class ScanReportResponse
{
    public function __construct(Scan $scan, int $siwecosScanId)
    {
        $this->id = $siwecosScanId;
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
