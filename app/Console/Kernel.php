<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('siwecos:delete-empty-tokens')->hourly();

        $schedule->command('siwecos:delete-old-scans')->hourly();
        $schedule->command('siwecos:delete-old-crawledUrls')->hourly();
        $schedule->command('siwecos:delete-old-mailDomains')->hourly();

        $schedule->command('siwecos:check-scan-timeout')->everyTenMinutes();

        $schedule->command('siwecos:trigger-crawler')->dailyAt('23:00');
        $schedule->command('siwecos:trigger-daily-scans')->dailyAt('01:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
