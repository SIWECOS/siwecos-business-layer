<?php

namespace Tests\Unit;

use App\Jobs\StartScanJob;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;

class TriggerDailyScansCommandTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_command_will_start_a_recurrent_scan_by_default()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);

        $this->artisan('siwecos:trigger-daily-scans')
            ->expectsOutput('1 Scans were started.');

        \Queue::assertPushed(StartScanJob::class, 1);
    }

    /** @test */
    public function the_command_will_not_start_a_recurrent_scan_if_a_successful_nonfree_scan_exists_today()
    {
        $this->getFinishedScan([], ['is_freescan' => false], ['is_verified' => true]);

        $this->artisan('siwecos:trigger-daily-scans')
            ->expectsOutput('0 Scans were started.');

        \Queue::assertNothingPushed();
    }

    /** @test */
    public function the_command_will_start_a_recurrent_scan_if_a_successful_nonfree_scan_exists_but_not_today()
    {
        $knownDate = Carbon::create(2019, 2, 8, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);

        $this->getFinishedScan([], ['is_freescan' => false], ['is_verified' => true]);

        Carbon::setTestNow($knownDate->addDay());

        $this->artisan('siwecos:trigger-daily-scans')
            ->expectsOutput('1 Scans were started.');

        \Queue::assertPushed(StartScanJob::class, 1);
    }

    /** @test */
    public function if_a_scan_had_an_error_a_recurrent_scan_will_be_started()
    {
        $this->getFailedScan([], ['is_freescan' => false], ['is_verified' => true]);

        $this->artisan('siwecos:trigger-daily-scans')
            ->expectsOutput('1 Scans were started.');

        \Queue::assertPushed(StartScanJob::class, 1);
    }

    /** @test */
    public function if_the_force_option_is_used_scans_for_all_verified_domains_will_be_started()
    {
        $this->getFinishedScan([], ['is_freescan' => false], ['is_verified' => true]);

        $this->artisan('siwecos:trigger-daily-scans --force')
            ->expectsOutput('1 Scans were started.');

        \Queue::assertPushed(StartScanJob::class, 1);
    }

    /** @test */
    public function there_will_no_error_be_thrown_if_the_latest_scan_was_not_finished_yet()
    {
        $this->getStartedScan([], ['is_freescan' => false], ['is_verified' => true]);

        $this->artisan('siwecos:trigger-daily-scans')
            ->expectsOutput('1 Scans were started.');

        \Queue::assertPushed(StartScanJob::class, 1);
    }
}
