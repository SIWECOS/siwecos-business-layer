<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use App\Jobs\StartScanJob;
use App\SiwecosScan;

class RecurrentScansTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function for_every_verified_domain_a_daily_scan_will_be_performed()
    {
        $this->getRegisteredDomain(['is_verified' => true]);
        $this->getRegisteredDomain(['domain' => 'another.domain', 'is_verified' => false]);

        $this->artisan('siwecos:trigger-daily-scans')
            ->expectsOutput('1 Scans were started.');
        $this->assertCount(1, SiwecosScan::all());

        Queue::assertPushed(StartScanJob::class, 1);
    }
}
