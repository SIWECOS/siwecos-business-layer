<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Token;
use App\Domain;
use Illuminate\Database\QueryException;
use App\Scan;

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
    public function a_domain_has_the_calculated_parameter_url_with_https_scheme()
    {
        $domain = factory(Domain::class)->make(['domain' => 'example.org']);

        $this->assertEquals('https://example.org', $domain->url);
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
    public function a_domain_can_have_many_scans()
    {
        $domain = $this->getRegisteredDomain();
        $this->assertCount(0, $domain->scans);
    }

    /** @test */
    public function if_a_domain_gets_deleted_all_associated_scans_will_be_deleted_too()
    {
        $this->getGeneratedScan();
        $this->getStartedScan();
        $this->getFinishedScan();
        $this->getFailedScan();
        $domain = Domain::first();

        $this->assertCount(4, $domain->scans);

        $domain->delete();
        $this->assertCount(0, Domain::all());
        $this->assertCount(0, Scan::all());
    }

    /** @test */
    public function if_the_domain_has_no_associated_scans_the_deletion_works_too()
    {
        $domain = $this->getRegisteredDomain();

        $this->assertTrue($domain->delete());
        $this->assertCount(0, Domain::all());
    }
}
