<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RedirectToSiwecosHomepageTest extends TestCase
{
    /** @test */
    public function the_main_route_will_redirect_to_the_siwecos_homepage()
    {
        $this->get('/')->assertRedirect('https://siwecos.de');
    }

    /** @test */
    public function a_404_not_found_will_not_be_redirected()
    {
        $response = $this->getJson('/not/existing/route');

        $response->assertStatus(404);
        $response->assertJson(['message' => 'Not found']);


        $response = $this->getJson('/api/not/existing/api-route');

        $response->assertStatus(404);
        $response->assertJson(['message' => 'Not found']);
    }
}
