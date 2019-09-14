<?php

namespace Tests\Feature;

use App\Notifications\ScansTimedOutNotification;
use App\Scan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Notification;

class ScanTimeoutTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function if_a_scan_has_the_status_running_for_more_than_6_hours_the_scan_should_be_marked_as_failed()
    {
        $knownDate = Carbon::create(2019, 2, 8, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);

        $scan = $this->getStartedScan();

        $this->artisan('siwecos:check-scan-timeout')
            ->expectsOutput('0 Scans timed out.');
        $this->assertEquals('running', Scan::first()->status);

        Carbon::setTestNow($knownDate->addMinutes(config('siwecos.scan_timeout_threshold') + 1));

        $this->artisan('siwecos:check-scan-timeout')
            ->expectsOutput('1 Scans timed out.');
        $this->assertTrue(Scan::first()->has_error);
        $this->assertEquals('failed', Scan::first()->status);
    }

    /** @test */
    public function the_admins_should_be_notified_if_there_was_an_timeout()
    {
        $this->getStartedScan();

        Carbon::setTestNow(now()->addHours(12));

        $this->artisan('siwecos:check-scan-timeout')
            ->expectsOutput('1 Scans timed out.');

        Notification::assertTimesSent(1, ScansTimedOutNotification::class);
    }
}
