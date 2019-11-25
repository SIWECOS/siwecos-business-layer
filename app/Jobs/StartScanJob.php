<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\HTTPClient;
use App\Scan;
use App\SiwecosScan;
use Illuminate\Support\Facades\Log;

class StartScanJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $scan;
    public $dangerLevel;
    public $scanners;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Scan $scan, int $dangerLevel, array $scanners)
    {
        $this->scan = $scan;
        $this->dangerLevel = $dangerLevel;
        $this->scanners = $scanners;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(HTTPClient $client)
    {
        try {
            $response = $client->request('POST', config('siwecos.coreApiScanStartUrl'), ['json' => [
                'url' => $this->scan->url,
                'dangerLevel' => $this->dangerLevel,
                'callbackurls' => [
                    config('app.url') . '/api/v2/scan/finished/' . $this->scan->id
                ],
                'scanners' => $this->scanners
            ]]);

            if ($response->getStatusCode() === 200) {
                $this->scan->update(['started_at' => now()]);
            } else {
                Log::critical(
                    'Failed to start scan for scan id: ' . $this->scan->id
                        . 'HTTP-Status: ' . $response->getStatusCode()
                        . 'Message: ' . $response->getBody()->getContents()
                );
                $this->scan->update([
                    'has_error' => true,
                    'finished_at' => now()
                ]);
            }
        } catch (\Exception $e) {
            Log::critical(
                'Failed to start scan for scan id: ' . $this->scan->id
                    . 'The following Exception was thrown: ' .  $e
            );
            $this->scan->update([
                'has_error' => true,
                'finished_at' => now()
            ]);
        }
    }
}
