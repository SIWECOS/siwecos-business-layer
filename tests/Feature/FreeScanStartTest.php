<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use App\Jobs\StartScanJob;
use App\Token;
use Illuminate\Support\Carbon;

class FreeScanStartTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_free_scan_can_be_started_for_a_given_url()
    {
        $response = $this->json('POST', '/api/v2/freescan', [
            'domain' => 'example.org'
        ]);

        $response->assertStatus(200);
        Queue::assertPushed(StartScanJob::class);

        $response->assertExactJson([
            'scan_id' => 1
        ]);
    }

    /** @test */
    public function a_free_scan_can_also_be_started_for_an_registered_and_verified_domain()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/freescan', [
            'domain' => $domain->domain
        ]);

        $response->assertStatus(200);
        Queue::assertPushed(StartScanJob::class);

        $response->assertExactJson([
            'scan_id' => 1
        ]);
    }

    /** @test */
    public function a_free_scan_can_only_be_started_once_in_12_hours_and_will_return_last_scan_otherwise()
    {
        $knownDate = Carbon::create(2019, 2, 8, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);

        $scan = $this->getFinishedScan(['is_freescan' => true]);

        $knownDate->addHours(3);
        Carbon::setTestNow($knownDate);

        $response = $this->json('POST', '/api/v2/freescan', [
            'domain' => $scan->domain->domain
        ]);
        $response->assertStatus(200);
        $response->assertJson(['scan_id' => 1]);
        Queue::assertNothingPushed();


        $knownDate->addHours(9); // total 12
        Carbon::setTestNow($knownDate);

        $response = $this->json('POST', '/api/v2/freescan', [
            'domain' => $scan->domain->domain
        ]);
        $response->assertStatus(200);
        $response->assertJson(['scan_id' => 2]);
        Queue::assertPushed(StartScanJob::class);
    }
}
