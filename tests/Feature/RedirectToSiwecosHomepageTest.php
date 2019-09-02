<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RedirectToSiwecosHomepageTest extends TestCase
{
    /** @test */
    public function a_404_not_found_will_be_redirected()
    {
        $response = $this->get('/not/existing/route');

        $response->assertRedirect('https://siwecos.de');


        $response = $this->get('/api/not/existing/api-route');

        $response->assertRedirect('https://siwecos.de');
    }
}
