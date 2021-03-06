<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Token;
use App\Domain;
use Illuminate\Database\QueryException;
use App\Scan;
use App\CrawledUrl;
use App\MailDomain;
use App\SiwecosScan;

class DomainTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_domain_belongsTo_a_token()
    {
        $token = factory(Token::class)->create(['type' => 'external']);

        $token->domains()->create(factory(Domain::class)->make()->toArray());

        $this->assertEquals(Token::first(), Domain::first()->token);
    }

    /** @test */
    public function a_domain_can_not_be_created_without_a_token()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);
        Domain::create(['domain' => 'example.org']);
    }

    /** @test */
    public function a_domain_has_the_calculated_parameter_mainUrl_with_http_scheme_or_crawled_mainUrl()
    {
        $domain = $this->getRegisteredDomain();
        $this->assertEquals('http://example.org', $domain->mainUrl);

        $domain->crawledUrls()->create(['url' => 'https://example.org', 'is_main_url' => true]);
        $this->assertEquals('https://example.org', $domain->mainUrl);
    }

    /** @test */
    public function a_domain_is_unique_in_the_database()
    {
        $token1 = factory(Token::class)->create();
        $token1->domains()->create(factory(Domain::class)->make(['domain' => 'example.org'])->toArray());
        $this->assertCount(1, Domain::all());

        $this->expectException(QueryException::class);
        $token2 = factory(Token::class)->create();
        $token2->domains()->create(factory(Domain::class)->make(['domain' => 'example.org'])->toArray());
    }

    /** @test */
    public function a_domain_can_have_many_siwecosScans()
    {
        $domain = $this->getRegisteredDomain();
        $domain->siwecosScans()->create([
            'is_freescan' => false,
            'is_recurrent' => false
        ]);

        $this->assertCount(1, $domain->siwecosScans);
    }

    /** @test */
    public function a_domain_can_have_many_crawledUrls()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        $domain->crawledUrls()->create([
            'url' => 'https://example.org/shop'
        ]);

        $this->assertCount(1, CrawledUrl::all());
    }

    /** @test */
    public function a_domain_can_have_many_mailDomains()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        $domain->mailDomains()->create([
            'domain' => 'mx.example.org'
        ]);

        $this->assertCount(1, MailDomain::all());
    }

    /** @test */
    public function if_a_domain_gets_deleted_all_associated_models_will_be_deleted_too()
    {
        $this->getGeneratedScan();
        $this->getStartedScan();
        $this->getFinishedScan();
        $this->getFailedScan();
        $domain = Domain::first();
        $domain->crawledUrls()->createMany([
            ['url' => 'https://example.org/shop'],
            ['url' => 'https://example.org/blog']
        ]);
        $domain->mailDomains()->createMany([
            ['domain' => 'mx1.example.org'],
            ['domain' => 'mx2.example.org']
        ]);

        $this->assertCount(4, Scan::all());

        $domain->delete();
        $this->assertCount(0, CrawledUrl::all());
        $this->assertCount(0, $domain->mailDomains);
        $this->assertCount(0, SiwecosScan::all());
        $this->assertCount(0, Scan::all());
        $this->assertCount(0, Domain::all());
    }

    /** @test */
    public function if_the_domain_has_no_associated_scans_the_deletion_works_too()
    {
        $domain = $this->getRegisteredDomain();

        $this->assertTrue($domain->delete());
        $this->assertCount(0, Domain::all());
    }
}
