<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class ScanStatusTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $knownDate = Carbon::create(2019, 5, 7, 11, 55, 15);
        Carbon::setTestNow($knownDate);
    }

    /** @test */
    public function when_a_scan_was_not_started_yet_the_status_will_be_created()
    {
        $siwecosScan = $this->getGeneratedScan([], ['is_freescan' => true])->siwecosScans->first();
        $response = $this->post('/api/v2/scan/' . $siwecosScan->id);

        $response->assertStatus(200);
        $response->assertExactJson([
            'id' => 1,
            'status' => 'created',
            'has_error' => false,
            'started_at' => null,
            'finished_at' => null
        ]);
    }

    /** @test */
    public function when_a_scan_is_not_finished_yet_the_result_will_be_a_waiting_status()
    {
        $siwecosScan = $this->getStartedScan([], ['is_freescan' => true])->siwecosScans->first();
        $response = $this->post('/api/v2/scan/' . $siwecosScan->id);

        $response->assertStatus(200);
        $response->assertExactJson([
            'id' => 1,
            'status' => 'running',
            'has_error' => false,
            'started_at' => Carbon::now()->toIso8601ZuluString(),
            'finished_at' => null
        ]);
    }

    /** @test */
    public function when_a_scan_could_not_be_started_a_failed_message_is_returned()
    {
        $siwecosScan = $this->getFailedScan([], ['is_freescan' => true])->siwecosScans->first();
        $response = $this->post('/api/v2/scan/' . $siwecosScan->id);

        $response->assertStatus(200);
        $response->assertExactJson([
            'id' => 1,
            'status' => 'failed',
            'has_error' => true,
            'started_at' => null,
            'finished_at' => Carbon::now()->toIso8601ZuluString()
        ]);
    }

    /** @test */
    public function when_a_scan_is_finished_the_success_message_is_returned()
    {
        $siwecosScan = $this->getFinishedScan([], ['is_freescan' => true])->siwecosScans->first();
        $response = $this->post('/api/v2/scan/' . $siwecosScan->id);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'finished',
            'has_error' => false,
            'started_at' => Carbon::now()->toIso8601ZuluString(),
            'finished_at' => Carbon::now()->toIso8601ZuluString(),
        ]);
    }

    /** @test */
    public function the_status_of_a_freescan_can_be_retrieved_by_everyone()
    {
        $siwecosScan = $this->getFinishedScan([], ['is_freescan' => true])->siwecosScans->first();
        $response = $this->post('/api/v2/scan/' . $siwecosScan->id);

        $response->assertStatus(200);
    }

    /** @test */
    public function the_status_of_a_non_freescan_can_only_be_retrieved_by_the_associated_token()
    {
        $scan = $this->getFinishedScan([], ['is_freescan' => false])->siwecosScans->first();

        $response = $this->post('/api/v2/scan/' . $scan->id);
        $response->assertStatus(403);

        $response = $this->post('/api/v2/scan/' . $scan->id, [], [
            'SIWECOS-Token' => $scan->domain->token->token
        ]);
        $response->assertStatus(200);
    }
}
