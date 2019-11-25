<?php

namespace Tests\Feature;

use App\Token;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SiwecosScanReportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_siwecosScanReport_will_return_the_results_as_an_array()
    {
        $siwecosScan = $this->getFinishedScan()->siwecosScans->first();
        $secondScan = $siwecosScan->scans()->create([
            'url' => 'http://example.org/shop',
            'started_at' => now()
        ]);
        $secondScan->results = json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResults.json')), true)['results'];
        $secondScan->save();

        $response = $this->postJson('/api/v2/siwecosScan/' . $siwecosScan->id, [], [
            'SIWECOS-Token' => Token::first()->token
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'reports' => [
                'http://example.org' => [],
                'http://example.org/shop' => [],
            ]
        ]);
    }

    /** @test */
    public function a_siwecosScanReport_contains_the_average_scanner_score_statistics()
    {
        config(['siwecos.scannerWeight.TLS' => 3]);
        config(['siwecos.scannerWeight.DOMXSS' => 0]);

        $siwecosScan = $this->getFinishedScan()->siwecosScans->first();
        $additionalScan = $this->getFinishedScan(['url' => 'https://example.org/shop']);
        $additionalScan->results = $additionalScan->results->map(function ($scanner) {
            $scanner['score'] = 0;
            return $scanner;
        });
        $additionalScan->save();
        $siwecosScan->scans()->attach($additionalScan);

        $response = $this->postJson('/api/v2/siwecosScan/' . $siwecosScan->id, [], [
            'SIWECOS-Token' => Token::first()->token
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'scanner_scores' => [
                'DOMXSS' => 25,
                'HEADER' => 42.5,
                'INFOLEAK' => 50,
                'INI_S' => 50,
                'TLS' => 50
            ]
        ]);
    }

    /** @test */
    public function a_siwecosScan_report_can_only_be_retrieved_for_finished_scans()
    {
        $siwecosScan = $this->getStartedScan([], ['is_freescan' => false])->siwecosScans->first();

        $response = $this->post('/api/v2/siwecosScan/' . $siwecosScan->id, [], [
            'SIWECOS-Token' => $siwecosScan->domain->token->token
        ]);

        $response->assertStatus(200);
        $this->assertNull($response->json('reports'));
    }
}
