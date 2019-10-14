<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Domain;

class TriggerDailyScansCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siwecos:trigger-daily-scans';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start the daily scans for all domains.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->startedScans = 0;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $domains = Domain::whereIsVerified(true)->get();

        foreach ($domains as $domain) {
            $siwecosScan = $domain->siwecosScans()->create([
                'is_freescan' => false,
                'is_recurrent' => true
            ]);

            $siwecosScan->dispatchScanJobs();

            $this->startedScans++;
        }

        $this->info($this->startedScans . ' Scans were started.');
    }
}
