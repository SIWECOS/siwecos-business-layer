<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Scan;

class CalculateScoreTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function if_a_scan_result_has_a_scoreType_critical_the_maximum_score_is_capped_by_20()
    {
        $scan = $this->getStartedScan();
        $scan->results = json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResultsWithCriticalIssue.json')), true)['results'];
        $scan->save();

        $this->assertEquals(20, Scan::first()->score);
    }

    /** @test */
    public function by_default_every_scanner_has_a_score_weight_of_1()
    {
        $this->getFinishedScan();

        $this->assertEquals(87, Scan::first()->score);
    }

    /** @test */
    public function the_scanners_score_weight_can_be_configured()
    {
        config([
            'siwecos.scanner_weight.DOMXSS' => 0,
            'siwecos.scanner_weight.INFOLEAK' => 0.25,
            'siwecos.scanner_weight.TLS' => 5.0,
        ]);

        $this->getFinishedScan();

        $this->assertEquals(98, Scan::first()->score);
    }
}
