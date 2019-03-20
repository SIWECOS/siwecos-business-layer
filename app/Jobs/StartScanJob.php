<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\HTTPClient;

class StartScanJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $url;
    public $is_freescan;
    public $is_recurrent;
    public $client;

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
    public function __construct(string $url, bool $is_freescan, bool $is_recurrent, HTTPClient $client = null)
    {
        $this->url = $url;
        $this->is_freescan = $is_freescan;
        $this->is_recurrent = $is_recurrent;
        $this->client = $client ?: new HTTPClient();

        $this->dangerLevel = $is_freescan ? 0 : 10;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
