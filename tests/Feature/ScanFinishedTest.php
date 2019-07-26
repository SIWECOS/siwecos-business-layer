<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Jobs\PushScanToElasticsearchJob;

class ScanFinishedTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        Storage::fake('local');
    }

    /** @test */
    public function there_is_an_api_route_for_the_coreApi_to_send_the_scan_results_for_a_given_scan()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);

        $response = $this->json(
            'POST',
            '/api/v2/scan/finished/' . $scan->id,
            json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResults.json')), true)
        );

        $response->assertStatus(200);
        $this->assertTrue($scan->refresh()->is_finished);
    }

    /** @test */
    public function if_the_coreApi_sends_a_list_of_missing_results_the_scan_gets_hasErrorTrue_and_the_missing_scans_are_logged()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);

        $response = $this->json(
            'POST',
            '/api/v2/scan/finished/' . $scan->id,
            json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResultsWithMissingScannerResults.json')), true)
        );

        $response->assertStatus(200);
        $this->assertTrue($scan->refresh()->is_finished);
        $this->assertTrue($scan->has_error);
        Log::assertLogged('critical', function ($message, $context) use ($scan) {
            return Str::contains($message, "Missing ScanResult for Scan with ID " . $scan->id .  PHP_EOL
                . "Missing result from scanner: INI_S, HEADER");
        });
    }

    /** @test */
    public function already_finished_scans_can_not_be_overwritten()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);
        $response = $this->json('POST', '/api/v2/scan/finished/' . $scan->id, json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResults.json')), true));

        $response->assertStatus(200);
        $this->assertTrue($scan->refresh()->is_finished);

        $response = $this->json('POST', '/api/v2/scan/finished/' . $scan->id, json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResults.json')), true));
        $response->assertStatus(403);
    }

    /** @test */
    public function the_siwecos_seals_are_generated_when_a_scan_is_finished()
    {
        $scan = $this->getStartedScan(['is_freescan' => false]);
        $response = $this->json('POST', '/api/v2/scan/finished/' . $scan->id, json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResults.json')), true));

        $response->assertStatus(200);
        Storage::assertExists('example.org/d.m.y.svg');
        Storage::assertExists('example.org/y-m-d.svg');
    }

    /** @test */
    public function the_siwecos_seals_are_not_generated_when_a_scan_is_a_freescan()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);
        $response = $this->json('POST', '/api/v2/scan/finished/' . $scan->id, json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResults.json')), true));

        $response->assertStatus(200);
        Storage::assertMissing('example.org/d.m.y.svg');
        Storage::assertMissing('example.org/y-m-d.svg');
    }

    /** @test */
    public function when_a_scan_is_finished_the_results_will_be_send_to_elasticsearch()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);
        $response = $this->json(
            'POST',
            '/api/v2/scan/finished/' . $scan->id,
            json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResults.json')), true)
        );

        $response->assertStatus(200);
        $this->assertTrue($scan->refresh()->is_finished);
        \Queue::assertPushed(PushScanToElasticsearchJob::class);
    }
}
