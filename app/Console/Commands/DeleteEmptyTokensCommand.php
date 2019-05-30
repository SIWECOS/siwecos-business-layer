<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Token;

class DeleteEmptyTokensCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siwecos:delete-empty-tokens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all Tokens that have no asociated Domains within 24 hours.';

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
        $tokens = Token::doesntHave('domains')->where('created_at', '<=', now()->subHours(24))->delete();

        $this->info($tokens . ' Tokens were deleted.');
    }
}
