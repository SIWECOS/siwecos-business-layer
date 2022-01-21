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


    public $scan;

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
        if (!env('ELASTICSEARCH_HOST', 'elasticsearch')) {
            return;
        }

        try {
            // Reformat $this->scan->results for correct elasticsearch indexing
            // Map result:  scan.results.HEADER.tests.X_CONTENT_TYPE_OPTIONS.score
            //                              |                   |
            //                    First mapWithKeys   Second map and mapWithKeys
            $reformattedResults = null;
            if ($this->scan->results->isNotEmpty()) {
                $reformattedResults = $this->scan->results->reverse()->mapWithKeys(function ($item) {
                    return [$item['name'] => $item];
                })->map(function ($scanner) {
                    $scanner['tests'] = collect($scanner['tests'])->mapWithKeys(function ($item) {
                        return [$item['name'] => $item];
                    });
                    return $scanner;
                });
            }

            $data = [
                'body' => [
                    'scan' => array_merge(
                        $this->scan->toArray(),
                        [
                            // overwrite scan.results for correct indexing
                            'results' =>  $reformattedResults,
                        ]
                    ),
                    'domain' => parse_url($this->scan->url, PHP_URL_HOST),
                ],
                'index' => 'scans-' . config('app.env'),
                'id' => $this->scan->id,
                'type' => 'json'
            ];
            if (Elasticsearch::index($data)) {
                \Log::info('Scan with id ' . $this->scan->id . ' was sent to elasticsearch.');
            };
        } catch (\Exception $e) {
            \Log::critical('Scan with id ' . $this->scan->id . ' could not be sent to elasticsearch!' . PHP_EOL . $e);
        }
    }
}
