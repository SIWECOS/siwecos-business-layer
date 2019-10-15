<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Domain;
use App\CrawledUrl;

class CrawledUrlTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_crawledUrl_belongsTo_a_domain()
    {
        $this->getDomainWithCrawledUrls();

        $this->assertEquals(Domain::first(), CrawledUrl::first()->domain);
    }
}
