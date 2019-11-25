<?php

namespace App\Console\Commands;

use App\CrawledUrl;
use Illuminate\Console\Command;

class DeleteOldCrawledUrlsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siwecos:delete-old-crawledUrls';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all orphaned CrawledUrls that are older than 30 days.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $crawledUrls = CrawledUrl::doesntHave('domain')->where('updated_at', '<=', now()->subDays(30)->toDateTimeString())
            ->get()
            ->each(function ($crawledUrl) {
                $crawledUrl->delete();
            });

        $this->info($crawledUrls->count() . ' CrawledUrls were deleted.');
    }
}
