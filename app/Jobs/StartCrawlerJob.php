<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Domain;
use App\HTTPClient;
use Illuminate\Support\Facades\Log;

class StartCrawlerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Domain $domain)
    {
        $this->domain = $domain;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(HTTPClient $client)
    {
        try {
            if (!$this->domain->is_verified) {
                Log::warning('Crawler was not started, because domain is not verified: ' . $this->domain->domain);
                $this->delete();
            }

            $response = $client->request('POST', config('siwecos.crawlerStartUrl'), ['json' => [
                'url' => 'http://' . $this->domain->domain,
                'callbackurls' => [
                    config('app.url') . '/api/v2/crawler/finished'
                ]
            ]]);

            if ($response->getStatusCode() === 200) {
                Log::debug('Started crawler for domain: ' . $this->domain->domain);
            } else {
                Log::critical(
                    'Failed to start crawler for domain: ' . $this->domain->domain . PHP_EOL
                        . 'HTTP-Status: ' . $response->getStatusCode() . PHP_EOL
                        . 'Message: ' . $response->getBody()->getContents()
                );
            }
        } catch (\Exception $e) {
            Log::critical(
                'Failed to start crawler for domain: ' . $this->domain->domain . PHP_EOL
                    . 'The following Exception was thrown: ' . PHP_EOL . $e
            );
        }
    }
}
