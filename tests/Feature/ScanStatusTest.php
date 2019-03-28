<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class ScanStatusTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function when_a_scan_was_not_started_yet_the_status_will_be_created()
    {
        $scan = $this->getGeneratedScan();
        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
        $response->assertExactJson([
            'status' => 'created',
            'has_error' => false,
            'started_at' => null,
            'finished_at' => null
        ]);
    }

    /** @test */
    public function when_a_scan_is_not_finished_yet_the_result_will_be_a_waiting_status()
    {
        $scan = $this->getStartedScan();
        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
        $response->assertExactJson([
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
        $response->assertExactJson([
            'status' => 'failed',
            'has_error' => true,
            'started_at' => null,
            'finished_at' => Carbon::now()->toDateTimeString()
        ]);
    }

    /** @test */
    public function when_a_scan_is_finished_the_success_message_is_returned()
    {
        $scan = $this->getFinishedScan();
        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'finished',
            'has_error' => false,
            'started_at' => Carbon::now()->toDateTimeString(),
            'finished_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
