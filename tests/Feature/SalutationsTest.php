<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Salutation;

class SalutationsTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        parent::setUp();
        app(\DatabaseSeeder::class)->call(\SalutationsSeeder::class);
    }

    /** @test */
    public function there_is_an_endpoint_to_retrieve_all_salutations()
    {
        $response = $this->json('GET', '/api/v1/salutations');

        $response->assertStatus(200);
        $response->assertExactJson(Salutation::all()->toArray());
    }
}
