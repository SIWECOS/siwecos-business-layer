<?php

namespace App\Console\Commands;

use App\Domain;
use App\Jobs\StartCrawlerJob;
use Illuminate\Console\Command;

class TriggerCrawlerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siwecos:trigger-crawler
                            {domain? : Start the Crawler for this Domain}
                            {--all : Start the Crawler for all verified Domains}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Starts the crawler';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->startedCrawlerJobs = 0;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->option('all')) {
            $domains = Domain::whereIsVerified(true)->get();
        } elseif ($this->argument('domain')) {
            $domains = Domain::whereDomain($this->argument('domain'))->get();
        } else {
            $domains = Domain::whereIsVerified(true)
                ->where('updated_at', '<=', now()->subDays(7)->toDateTimeString())
                ->get();
        }

        foreach ($domains as $domain) {
            StartCrawlerJob::dispatch($domain);

            $this->startedCrawlerJobs++;
        }

        $this->info($this->startedCrawlerJobs . ' CrawlerJobs were started.');
    }
}
