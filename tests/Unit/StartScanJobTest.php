<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Jobs\StartScanJob;

class StartScanJobTest extends TestCase
{
    /** @test */
    public function the_startScanJob_accepts_needed_parameters()
    {
        $url = 'https://example.org';
        $is_freescan = true;
        $is_recurrent = false;

        $job = new StartScanJob($url, $is_freescan, $is_recurrent);

        $this->assertInstanceOf(StartScanJob::class, $job);
        $this->assertEquals('https://example.org', $job->url);
        $this->assertEquals(true, $job->is_freescan);
        $this->assertEquals(false, $job->is_recurrent);
    }

    /** @test */
    public function by_default_the_dangerLevel_is_0_on_freescans()
    {
        $job = new StartScanJob('https://example.org', true, false);

        $this->assertEquals(0, $job->dangerLevel);
    }

    /** @test */
    public function by_default_the_dangerLevel_is_10_on_nonFreescans()
    {
        $job = new StartScanJob('https://example.org', false, false);

        $this->assertEquals(10, $job->dangerLevel);
    }
}
