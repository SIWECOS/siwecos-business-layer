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
