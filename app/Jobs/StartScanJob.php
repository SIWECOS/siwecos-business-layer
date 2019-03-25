<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\HTTPClient;
use App\Scan;
use Carbon\Carbon;

class StartScanJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $scan;
    public $client;
    public $danger_level;

    /**
      * Create a new job instance.
      *
      * @param string $url
      * @param boolean $is_freescan
      * @param boolean $is_recurrent
      * @param HTTPClient $client
      *
      * @return void
      */
    public function __construct(Scan $scan, HTTPClient $client = null)
    {
        $this->scan = $scan;
        $this->client = $client ?: new HTTPClient();

        $this->danger_level = $scan->is_freescan ? 0 : 10;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $response = $this->client->json('POST', config('app.coreApiUrl'), [
            'url' => $this->scan->domain->url,
            'dangerLevel' => $this->danger_level,
            'callbackurls' => [
                config('app.url') . '/api/v2/scan/finished'
            ]
        ]);

        if ($response->getStatusCode() === 200) {
            $this->scan->update(['started_at' => Carbon::now()]);
        } else {
            // Log critical
            $this->scan->update([
                'has_error' => true,
                'finished_at' => Carbon::now()
            ]);
        }
    }
}
