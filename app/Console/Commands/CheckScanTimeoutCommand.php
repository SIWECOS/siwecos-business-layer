<?php

namespace App\Console\Commands;

use App\Notifications\ScansTimedOutNotification;
use App\Scan;
use Illuminate\Console\Command;

class CheckScanTimeoutCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siwecos:check-scan-timeout';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check all running scans for possible timeouts.';

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
        $scans = Scan::whereHasError(false)
            ->whereNotNull('started_at')
            ->whereResults('[]')
            ->where('started_at', '<', now()->subMinutes(config('siwecos.scan_timeout_threshold'))->toDateTimeString())
            ->get();

        foreach ($scans as $scan) {
            $scan->update(['has_error' => true]);
        }

        if (count($scans)) {
            \Notification::route('mail', config('siwecos.technicalSupportMail'))
                ->notify(new ScansTimedOutNotification($scans));
        }

        $this->info(count($scans) . ' Scans timed out.');
    }
}
