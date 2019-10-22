<?php

namespace App\Http\Responses;

use App\ScanReport;
use App\SiwecosScan;

class SiwecosScanReportResponse
{
    public function __construct(SiwecosScan $siwecosScan)
    {
        $this->id = $siwecosScan->id;
        $this->status = $siwecosScan->status;
        $this->has_error = (bool) $siwecosScan->isFailed;
        $this->started_at = $siwecosScan->started_at ? $siwecosScan->started_at->toIso8601ZuluString() : null;
        $this->finished_at = $siwecosScan->finished_at ? $siwecosScan->finished_at->toIso8601ZuluString() : null;

        if ($siwecosScan->is_finished) {
            $this->score = $siwecosScan->score;
            $this->scanner_scores = $siwecosScan->getAverageScannerScores();

            $reports = collect();
            foreach ($siwecosScan->scans as $scan) {
                $reports->put($scan->url, (new ScanReportResponse($scan))->report);
            }

            $this->reports = $reports;
        }
    }
}
