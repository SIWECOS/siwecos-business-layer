<?php

namespace Tests\Unit;

use App\Jobs\StartCrawlerJob;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Queue;

class TriggerCrawlerCommandTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_crawler_command_will_start_the_crawler_for_domains_that_were_not_updated_for_more_than_7_days()
    {
        $knownDate = Carbon::create(2019, 2, 8, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);
        $this->getRegisteredDomain(['is_verified' => true]);

        $this->artisan('siwecos:trigger-crawler')
            ->expectsOutput('0 CrawlerJobs were started.');
        Queue::assertNothingPushed();

        Carbon::setTestNow($knownDate->addDays(7));

        $this->artisan('siwecos:trigger-crawler')
            ->expectsOutput('1 CrawlerJobs were started.');
        Queue::assertPushed(StartCrawlerJob::class);
    }

    /** @test */
    public function the_crawler_command_has_an_option_to_start_the_crawler_for_all_domains()
    {
        $this->getRegisteredDomain(['is_verified' => true]);

        $this->artisan('siwecos:trigger-crawler')
            ->expectsOutput('0 CrawlerJobs were started.');

        $this->artisan('siwecos:trigger-crawler --all')
            ->expectsOutput('1 CrawlerJobs were started.');
    }

    /** @test */
    public function the_crawler_will_only_be_started_for_verified_domains()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => false]);

        $this->artisan('siwecos:trigger-crawler --all')
            ->expectsOutput('0 CrawlerJobs were started.');
        Queue::assertNothingPushed();

        $domain->update(['is_verified' => true]);

        $this->artisan('siwecos:trigger-crawler --all')
            ->expectsOutput('1 CrawlerJobs were started.');
        Queue::assertPushed(StartCrawlerJob::class, 1);
    }

    /** @test */
    public function the_crawler_command_can_be_started_for_a_given_domain_regardless_if_the_domain_is_verified_or_not()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => false]);

        $this->artisan('siwecos:trigger-crawler example.org')
            ->expectsOutput('1 CrawlerJobs were started.');
        Queue::assertPushed(StartCrawlerJob::class, 1);
    }
}
