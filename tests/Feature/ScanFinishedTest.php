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

    public function setUp()
    {
        parent::setUp();

        // Generate mastertoken
        $this->mastertoken = new Token(['credits' => 9999]);
        $this->mastertoken->setAclLevel(9999);
        $this->mastertoken->save();
    }

    /** @test */
    public function the_siwecos_seals_are_generated_when_a_scan_is_finished()
    {
        Storage::fake('gcs');

        $response = $this->json('POST', '/api/v1/scan/finished', [
            'scanId' => 4,
            'scanUrl' => 'https://lednerb.eu',
            'totalScore' => 100
        ], ['masterToken' => $this->mastertoken->token]);

        $response->assertStatus(200);
        Storage::disk('gcs')->assertExists('lednerb.eu/d.m.y.svg');
        Storage::disk('gcs')->assertExists('lednerb.eu/y-m-d.svg');
    }
}
