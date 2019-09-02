<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use App\Jobs\PushScanToElasticsearchJob;
use Illuminate\Support\Str;

class PushScanToElasticsearchJobTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_finished_scan_can_be_pushed_to_elasticsearch()
    {
        $scan = $this->getFinishedScan();

        $job = new PushScanToElasticsearchJob($scan->refresh());
        $job->handle();

        Log::assertLogged('info', function ($message, $context) {
            return Str::contains($message, "Scan with id 1 was sent to elasticsearch.");
        });
    }

    /** @test */
    public function a_failed_scan_can_also_be_pushed_to_elasticsearch()
    {
        $scan = $this->getFailedScan();
        $job = new PushScanToElasticsearchJob($scan->refresh());
        $job->handle();

        Log::assertLogged('info', function ($message, $context) {
            return Str::contains($message, "Scan with id 1 was sent to elasticsearch.");
        });
    }

    /** @test */
    public function exceptions_will_be_logged_if_they_occur()
    {
        $scan = $this->getFailedScan();
        config(['elasticsearch.connections.default.hosts.0.host' => 'not-existing-host']);

        $job = new PushScanToElasticsearchJob($scan->refresh());
        $job->handle();

        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Scan with id 1 could not be sent to elasticsearch!");
        });
    }
}
