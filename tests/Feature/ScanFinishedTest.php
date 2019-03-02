<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Token;
use Illuminate\Support\Facades\Storage;

class ScanFinishedTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function the_siwecos_seals_are_generated_when_a_scan_is_finished()
    {
        Storage::fake('gcs');

        $response = $this->json('POST', '/api/v1/scan/finished', [
            'scanId' => 4,
            'scanUrl' => 'https://lednerb.eu',
            'totalScore' => 100,
            'freescan' => false,
            'recurrentscan' => false,
        ]);

        $response->assertStatus(200);
        Storage::disk('gcs')->assertExists('lednerb.eu/d.m.y.svg');
        Storage::disk('gcs')->assertExists('lednerb.eu/y-m-d.svg');
    }
}
