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
    public function a_siwecosScan_report_will_return_the_results_as_an_array()
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
