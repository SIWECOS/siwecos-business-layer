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

    public $siwecosScan;
    public $url;
    public $scanners;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(SiwecosScan $siwecosScan, string $url, array $scanners)
    {
        $this->siwecosScan = $siwecosScan;
        $this->url = $url;
        $this->scanners = $scanners;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(HTTPClient $client)
    {
        $this->scan = $this->siwecosScan->scans()->create([
            'url' => $this->url
        ]);

        try {
            $response = $client->request('POST', config('siwecos.coreApiScanStartUrl'), ['json' => [
                'url' => $this->url,
                'dangerLevel' => $this->siwecosScan->danger_level,
                'callbackurls' => [
                    config('app.url') . '/api/v2/scan/finished/' . $this->scan->id
                ],
                'scanners' => $this->scanners
            ]]);

            if ($response->getStatusCode() === 200) {
                $this->scan->update(['started_at' => now()]);

                if (!$this->siwecosScan->is_freescan && !$this->siwecosScan->is_recurrent) {
                    $this->siwecosScan->domain->token->reduceCredits();
                }
            } else {
                Log::critical(
                    'Failed to start scan for scan id: ' . $this->scan->id
                        . 'SiwecosScan: ' . $this->siwecosScan->id
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
                    . 'SiwecosScan: ' . $this->siwecosScan->id
                    . 'The following Exception was thrown: ' .  $e
            );
            $this->scan->update([
                'has_error' => true,
                'finished_at' => now()
            ]);
        }
    }
}
