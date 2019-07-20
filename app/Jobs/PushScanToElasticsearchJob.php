<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Scan;
use Elasticsearch;

class PushScanToElasticsearchJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
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
    public function handle()
    {
        try {
            $hasResults = $this->scan->results()->reverse()->isNotEmpty();

            $data = [
                'body' => [
                    'scan' => array_merge(
                        $this->scan->toArray(),
                        [
                            'token' => $this->scan->token,
                            'domain' => $this->scan->domain,
                            // overwrite scan.results for correct indexing
                            'results' => $hasResults ? $this->scan->results->reverse()->mapWithKeys(function ($item) {
                                return [$item['name'] => $item];
                            }) : null,
                        ]
                    )
                ],
                'index' => 'scans',
                'id' => $this->scan->id,
                'type' => 'json'
            ];
            if (Elasticsearch::index($data)) {
                \Log::debug('Scan was sent to elasticsearch.');
            };
        } catch (\Exception $e) {
            \Log::critical('Scan could not be sent to elasticsearch!' . PHP_EOL . $e);
        }
    }
}
