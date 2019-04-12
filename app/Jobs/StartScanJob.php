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
use Illuminate\Support\Facades\Log;

class StartScanJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $scan;

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
    public function __construct(Scan $scan)
    {
        $this->scan = $scan;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(HTTPClient $client)
    {
        $response = $client->post(config('siwecos.coreApiUrl'), [
            'url' => $this->scan->domain->url,
            'dangerLevel' => $this->scan->danger_level,
            'callbackurls' => [
                config('app.url') . '/api/v2/scan/finished'
            ]
        ]);

        if ($response->getStatusCode() === 200) {
            $this->scan->update(['started_at' => Carbon::now()]);

            if (!$this->scan->domain->is_verified) {
                $this->scan->token->reduceCredits();
            }
        } else {
            Log::critical('Failed to start scan for scan id: ' . $this->scan->id);
            $this->scan->update([
                'has_error' => true,
                'finished_at' => Carbon::now()
            ]);
        }
    }
}
