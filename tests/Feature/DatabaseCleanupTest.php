<?php

namespace Tests\Feature;

use App\Scan;
use App\SiwecosScan;
use App\Token;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;

class DatabaseCleanupTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function token_without_assigned_domains_will_be_deleted_after_24_hours()
    {
        $knownDate = Carbon::create(2018, 2, 8, 13, 0, 0);
        Carbon::setTestNow($knownDate);

        factory(Token::class, 5)->create(['type' => 'external']);

        $this->artisan('siwecos:delete-empty-tokens')
            ->expectsOutput('0 Tokens were deleted.');
        $this->assertCount(5, Token::all());

        Carbon::setTestNow($knownDate->addHours(24));

        $this->artisan('siwecos:delete-empty-tokens')
            ->expectsOutput('5 Tokens were deleted.');
        $this->assertCount(0, Token::all());
    }

    /** @test */
    public function siwecosScans_older_than_30_days_will_be_deleted()
    {
        $knownDate = Carbon::create(2018, 2, 8, 13, 0, 0);
        Carbon::setTestNow($knownDate);

        $this->getFailedScan();
        $this->getFinishedScan();

        $this->assertCount(2, SiwecosScan::all());

        Carbon::setTestNow($knownDate->addDays(31));

        $this->getFinishedScan();

        $this->artisan('siwecos:delete-old-scans')
            ->expectsOutput('2 Scans were deleted.');
        $this->assertCount(1, SiwecosScan::all());
        $this->assertCount(1, Scan::all());
    }
}
