<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Token;
use App\Domain;
use Illuminate\Database\QueryException;

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
        Domain::create(['url' => 'https://example.org']);
    }

    /** @test */
    public function a_domain_has_the_calculated_parameter_hostname()
    {
        $domain = factory(Domain::class)->make(['url' => 'https://example.org']);

        $this->assertEquals('example.org', $domain->hostname);
    }

    /** @test */
    public function a_domain_has_the_calculated_parameter_scheme()
    {
        $domain = factory(Domain::class)->make(['url' => 'https://example.org']);

        $this->assertEquals('https', $domain->scheme);
    }

    /** @test */
    public function a_domain_has_the_calculated_parameter_isSecure()
    {
        $domain = factory(Domain::class)->make(['url' => 'https://example.org']);
        $this->assertTrue($domain->isSecure);

        $domain = factory(Domain::class)->make(['url' => 'http://example.org']);
        $this->assertFalse($domain->isSecure);
    }

    /** @test */
    public function a_domain_has_a_unique_url()
    {
        $token1 = factory(Token::class)->create();
        $token1->domains()->create(factory(Domain::class)->make(['url' => 'https://example.org'])->toArray());
        $this->assertCount(1, Domain::all());

        $this->expectException(QueryException::class);
        $token2 = factory(Token::class)->create();
        $token2->domains()->create(factory(Domain::class)->make(['url' => 'https://example.org'])->toArray());
    }
}
