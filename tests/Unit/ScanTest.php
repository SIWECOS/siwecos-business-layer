<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Token;
use App\Scan;
use App\Domain;
use Carbon\Carbon;

class ScanTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_scan_belongsTo_a_domain()
    {
        $this->getGeneratedScan();

        $this->assertCount(1, Scan::all());
        $this->assertEquals(Domain::first(), Scan::first()->domain);
    }

    /** @test */
    public function a_scan_belongs_to_a_token_through_domains()
    {
        $this->getGeneratedScan();

        $this->assertEquals(Token::first(), Scan::first()->token);
    }

    /** @test */
    public function a_scan_has_an_isFinished_status()
    {
        $scan = $this->getStartedScan();
        $this->assertFalse($scan->is_finished);

        $scan = $this->getFinishedScan();
        $this->assertTrue($scan->is_finished);
    }

    /** @test */
    public function a_scan_has_a_hasError_status()
    {
        $this->getGeneratedScan();

        $this->assertFalse(Scan::first()->has_error);
    }

    /** @test */
    public function a_scan_has_a_result_field_thats_null_by_default()
    {
        $this->getGeneratedScan();
        $this->assertNull(Scan::first()->results);
    }

    /** @test */
    public function the_results_field_is_retrieved_saved_as_an_collection()
    {
        $scan = $this->getGeneratedScan();
        // JSON String
        $scan->results = json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResults.json')), true)['results'];
        $scan->save();

        // Collection
        $this->assertIsIterable(Scan::first()->results);
        $this->assertNotNull(Scan::first()->results);
        $this->assertEquals('Collection', class_basename(Scan::first()->results));
    }

    /** @test */
    public function the_score_gets_set_when_the_result_is_received_to_the_model()
    {
        $this->getFinishedScan();

        $this->assertEquals(87, Scan::first()->score);
    }

    /** @test */
    public function the_scan_knows_which_domain_was_scanned()
    {
        $scan = $this->getGeneratedScan();

        $this->assertEquals(Domain::first(), $scan->domain);
    }

    /** @test */
    public function the_scan_knows_which_url_was_scanned()
    {
        $scan = $this->getGeneratedScan();

        $this->assertEquals('https://example.org', $scan->domain->url);
    }

    /** @test */
    public function a_scan_has_a_statedAt_value_with_default_null()
    {
        $scan = $this->getGeneratedScan();

        $this->assertNull($scan->started_at);
    }

    /** @test */
    public function a_scan_has_a_finishedAt_value()
    {
        $scan = $this->getGeneratedScan();
        $this->assertNull($scan->finished_at);

        $scan = $this->getFinishedScan();
        $this->assertNotNull($scan->finished_at);
        $this->assertEquals(Carbon::now()->toIso8601ZuluString(), $scan->finished_at->toIso8601ZuluString());
    }

    /** @test */
    public function a_scan_knows_his_status()
    {
        $scan = $this->getGeneratedScan(['has_error' => true]);
        $this->assertEquals('failed', $scan->status);

        $scan = $this->getGeneratedScan();
        $this->assertEquals('created', $scan->status);

        $scan = $this->getStartedScan();
        $this->assertEquals('running', $scan->status);

        $scan = $this->getFinishedScan();
        $this->assertEquals('finished', $scan->status);
    }

    /** @test */
    public function a_scan_knows_its_dangerLevel()
    {
        $scan = $this->getGeneratedScan(['is_freescan' => true]);
        $this->assertEquals(0, $scan->danger_level);

        $scan = $this->getGeneratedScan(['is_freescan' => false]);
        $this->assertEquals(10, $scan->danger_level);
    }
}
