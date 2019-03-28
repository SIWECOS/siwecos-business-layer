<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class ScanReportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_translated_and_reasonable_json_scan_report_can_be_retrieved_for_finished_scans()
    {
        $scan = $this->getFinishedScan(['is_freescan' => true]);

        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
        $response->assertExactJson([
            'started_at' => $scan->started_at->toDateTimeString(),
            'finished_at' => $scan->finished_at->toDateTimeString(),
            'has_error' => false,
            'status' => 'finished',
            'report' => []
        ]);
    }

    /** @test */
    public function a_scan_report_can_only_be_retrieved_for_finished_scans()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);

        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
        $response->assertJsonMissing([
            'report'
        ]);
    }

    /** @test */
    public function a_scan_report_can_only_be_retrieved_for_non_failed_scans()
    {
        $scan = $this->getFailedScan(['is_freescan' => true]);

        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
        $response->assertJsonMissing([
            'report'
        ]);
    }
}
