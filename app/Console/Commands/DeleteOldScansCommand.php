<?php

namespace App\Console\Commands;

use App\SiwecosScan;
use Illuminate\Console\Command;

class DeleteOldScansCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siwecos:delete-old-scans';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all SiwecosScans that are older than 30 days.';

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
        $scans = SiwecosScan::where('created_at', '<=', now()->subDays(30)->toDateTimeString())
            ->get()
            ->each(function ($siwecosScan) {
                $siwecosScan->delete();
            });

        $this->info($scans->count() . ' Scans were deleted.');
    }
}
