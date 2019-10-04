<?php

namespace Tests\Feature;

use App\Domain;
use App\Scan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;

class SealScanProofTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function there_is_an_endpoint_for_the_seal_proof_data()
    {
        $scan = $this->getFinishedScan([], ['is_freescan' => false], ['is_verified' => true]);

        $response = $this->get('/api/v2/domain/' . $scan->siwecosScan->domain->domain . '/sealproof');

        $response->assertStatus(200);
        $response->assertJson([
            'domain' => $scan->siwecosScan->domain->domain,
            'finished_at' => $scan->finished_at->toIso8601ZuluString(),
            'score' => $scan->score
        ]);
    }

    /** @test */
    public function only_nonFree_scan_data_will_be_returned_by_the_api()
    {
        $scan = $this->getFinishedScan([], ['is_freescan' => true], ['is_verified' => true]);

        $response = $this->get('/api/v2/domain/' . $scan->siwecosScan->domain->domain . '/sealproof');

        $response->assertStatus(404);
    }

    /** @test */
    public function only_verified_domains_can_retrieve_a_sealproof()
    {
        $scan = $this->getFinishedScan([], ['is_freescan' => false], ['is_verified' => false]);

        $response = $this->get('/api/v2/domain/' . $scan->siwecosScan->domain->domain . '/sealproof');

        $response->assertStatus(409);
    }

    /** @test */
    public function always_the_latest_nonFree_scan_result_is_returned()
    {
        $knownDate = Carbon::create(2019, 2, 8, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);

        $oldScan = $this->getFinishedScan([], ['is_freescan' => false], ['is_verified' => true]);

        Carbon::setTestNow($knownDate->addHours(8));

        $newScan = $this->getFinishedScan([], ['is_freescan' => false]);

        $response = $this->get('/api/v2/domain/' . $oldScan->siwecosScan->domain->domain . '/sealproof');

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'finished_at' => "2019-02-08T16:30:15Z"
        ]);

        $this->assertCount(2, Scan::all());
        $this->AssertCount(1, Domain::all());
    }

    /** @test */
    public function only_data_for_finished_scans_will_be_returned()
    {
        $knownDate = Carbon::create(2019, 2, 8, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);

        $scan = $this->getStartedScan([], ['is_freescan' => false], ['is_verified' => true]);

        $response = $this->getJson('/api/v2/domain/' . $scan->siwecosScan->domain->domain . '/sealproof');
        $response->assertStatus(404);
        $response->assertJson([
            'message' => 'No valid recurrent scan found.'
        ]);

        Carbon::setTestNow($knownDate->addHours(8));

        // finish scan
        $scan->results = json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResults.json')), true)['results'];
        $scan->finished_at = now();
        $scan->save();

        $response = $this->get('/api/v2/domain/' . $scan->siwecosScan->domain->domain . '/sealproof');
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'finished_at' => "2019-02-08T16:30:15Z"
        ]);
    }
}
