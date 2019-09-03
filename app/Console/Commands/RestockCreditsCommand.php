<?php

namespace App\Console\Commands;

use App\Token;
use Illuminate\Console\Command;

class RestockCreditsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siwecos:restock-credits';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increases the Token\'s credits to defined values.';

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
        $defaultCredits = [
            'regular' => config('siwecos.defaultTokenCredits'),
            'external' => config('siwecos.thirdPartyTokenCredits')
        ];

        Token::all()->each(function ($token) use ($defaultCredits) {
            if ($token->credits < $defaultCredits[$token->type]) {
                $token->update(['credits' => $defaultCredits[$token->type]]);
            }
        });
    }
}
