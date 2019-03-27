<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class ScanResultTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function when_a_scan_is_not_finished_yet_the_result_will_be_a_waiting_status()
    {
        $scan = $this->getStartedScan();
        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'running',
            'has_error' => false,
            'started_at' => Carbon::now()->toDateTimeString(),
            'finished_at' => null
        ]);
    }

    /** @test */
    public function when_a_scan_could_not_be_started_a_failed_message_is_returned()
    {
        $scan = $this->getFailedScan();
        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'failed',
            'has_error' => true,
            'started_at' => null,
            'finished_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}
