<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PdfReportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_pdfReport_can_be_retrieved_for_a_finished_scan()
    {
        $this->withoutExceptionHandling();
        $scan = $this->getFinishedScan(['is_freescan' => true]);

        $response = $this->get('/api/v2/scan/' . $scan->id . '/en/pdf');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
    }
}
