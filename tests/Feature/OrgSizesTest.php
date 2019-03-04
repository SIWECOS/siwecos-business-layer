<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\OrgSize;

class OrgSizesTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();
        app(\DatabaseSeeder::class)->call(\OrgSizesSeeder::class);
    }

    /** @test */
    public function there_is_an_endpoint_to_retrieve_all_orgSizes()
    {
        $response = $this->json('GET', '/api/v2/orgsizes');

        $response->assertStatus(200);
        $response->assertExactJson(OrgSize::all()->toArray());
    }
}
