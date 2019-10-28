<?php

namespace Tests\Unit;

use App\Domain;
use App\Scan;
use App\SiwecosScan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ScanReportResponseTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_scanReportResponse_will_return_the_siwecosScanId_instead_of_the_scanId()
    {
        $siwecosScan = $this->getFinishedScan([], ['is_freescan' => true])->siwecosScans->first();
        $siwecosScan->update(['id' => 42]);
        $siwecosScan->scans()->attach(Scan::first());

        $this->assertEquals(42, SiwecosScan::first()->id);
        $this->assertEquals(1, Scan::first()->id);
        $this->assertEquals('http://example.org', Domain::first()->mainUrl);


        $response = $this->postJson('/api/v2/scan/42/de');
        $response->assertStatus(200);
        $response->assertJsonFragment(['id' => 42]);
    }
}
