<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Token;
use App\Scan;
use App\Domain;

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
        $domain = $this->getRegisteredDomain();

        $domain->scans()->create(factory(Scan::class)->make()->toArray());
        $this->assertFalse(Scan::find(1)->is_finished);

        $domain->scans()->create(factory(Scan::class)->make([
            'results' =>  file_get_contents(base_path('tests/sampleScanResults.json'))
        ])->toArray());

        $this->assertTrue(Scan::find(2)->is_finished);
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
    public function the_results_field_is_saved_as_json()
    {
        $this->getGeneratedScan(['results' =>  file_get_contents(base_path('tests/sampleScanResults.json'))]);

        $this->assertJson(Scan::first()->results);
        $this->assertNotNull(Scan::first()->results);
    }

    /** @test */
    public function the_score_gets_set_when_the_result_is_received_to_the_model()
    {
        $scan = $this->getGeneratedScan([
            'results' => file_get_contents(base_path('tests/sampleScanResults.json'))
        ]);

        $this->assertEquals(87, Scan::first()->score);
    }

    /**
     * Returns a generated Scan.
     *
     * @param array $attributes
     * @return Scan
     */
    protected function getGeneratedScan($attributes = [])
    {
        $domain = $this->getRegisteredDomain();
        return $domain->scans()->create(factory(Scan::class)->make($attributes)->toArray());
    }
}
