<?php

namespace App\Console\Commands;

use App\MailDomain;
use Illuminate\Console\Command;

class DeleteOldMailDomainsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siwecos:delete-old-mailDomains';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all orphaned MailDomains that are older than 30 days.';

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
        $mailDomains = MailDomain::doesntHave('domains')->where('updated_at', '<=', now()->subDays(30)->toDateTimeString())
            ->get()
            ->each(function ($mailDomain) {
                $mailDomain->delete();
            });

        $this->info($mailDomains->count() . ' MailDomains were deleted.');
    }
}
