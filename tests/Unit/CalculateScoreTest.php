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
}
