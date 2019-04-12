<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;

class ScanFinishedTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        Storage::fake('gcs');
    }

    /** @test */
    public function there_is_an_api_route_for_the_coreApi_to_send_the_scan_results_for_a_given_scan()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);

        $response = $this->json('POST', '/api/v2/scan/' . $scan->id, [
            'results' => file_get_contents(base_path('tests/sampleFreeScanResults.json'))
        ]);

        $response->assertStatus(200);
        $this->assertTrue($scan->refresh()->is_finished);
    }

    /** @test */
    public function already_finished_scans_can_not_be_overwritten()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);
        $response = $this->json('POST', '/api/v2/scan/' . $scan->id, [
            'results' => file_get_contents(base_path('tests/sampleFreeScanResults.json'))
        ]);

        $response->assertStatus(200);
        $this->assertTrue($scan->refresh()->is_finished);

        $response = $this->json('POST', '/api/v2/scan/' . $scan->id, [
            'results' => file_get_contents(base_path('tests/sampleFreeScanResults.json'))
        ]);
        $response->assertStatus(403);
    }

    /** @test */
    public function there_is_a_config_option_to_enforce_an_authentication_token_from_the_coreApi_for_the_callback_url()
    {
        config(['siwecos.coreApiAuthenticationToken' => 'ABCD1234']);
        $scan = $this->getStartedScan(['is_freescan' => true]);

        $response = $this->json('POST', '/api/v2/scan/' . $scan->id, [
            'results' => file_get_contents(base_path('tests/sampleFreeScanResults.json'))
        ]);
        $response->assertStatus(403);

        $response = $this->json('POST', '/api/v2/scan/' . $scan->id, [
            'results' => file_get_contents(base_path('tests/sampleFreeScanResults.json'))
        ], ['Authentication-Token' => 'ABCD1234']);
        $response->assertStatus(200);
    }

    /** @test */
    public function the_siwecos_seals_are_generated_when_a_scan_is_finished()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);
        $response = $this->json('POST', '/api/v2/scan/' . $scan->id, [
            'results' => file_get_contents(base_path('tests/sampleFreeScanResults.json'))
        ]);

        $response->assertStatus(200);
        Storage::disk('gcs')->assertExists('example.org/d.m.y.svg');
        Storage::disk('gcs')->assertExists('example.org/y-m-d.svg');
    }
}
