<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use App\Jobs\StartScanJob;
use App\Token;

class FreeScanStartTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_free_scan_can_be_started_for_a_given_url()
    {
        Queue::fake();

        $response = $this->json('POST', '/api/v2/freescan', [
            'url' => 'https://example.org'
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
        Queue::fake();

        $domain = $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/freescan', [
            'url' => $domain->url
        ]);

        $response->assertStatus(200);
        Queue::assertPushed(StartScanJob::class);

        $response->assertExactJson([
            'scan_id' => 1
        ]);
    }
}
