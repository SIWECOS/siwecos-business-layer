<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PdfReportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_pdfReport_can_be_retrieved_for_a_finished_freescan_scan()
    {
        $scan = $this->getFinishedScan(['is_freescan' => true]);

        $response = $this->post('/api/v2/scan/' . $scan->id . '/en/pdf');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
    }

    /** @test */
    public function a_pdfReport_can_be_retrieved_for_a_finished_nonFreescan_scan()
    {
        $scan = $this->getFinishedScan(['is_freescan' => false]);

        $response = $this->post('/api/v2/scan/' . $scan->id . '/en/pdf', [], ['SIWECOS-Token' => $scan->token->token]);

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
    }

    /** @test */
    public function if_a_scan_is_not_finished_no_pdf_report_will_be_generated()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);

        $response = $this->post('/api/v2/scan/' . $scan->id . '/en/pdf');

        $response->assertStatus(409);
    }
}
