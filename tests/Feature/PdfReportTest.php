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
        $siwecosScan = $this->getFinishedScan([], ['is_freescan' => true])->siwecosScans->first();

        $response = $this->post('/api/v2/scan/' . $siwecosScan->id . '/en/pdf');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
    }

    /** @test */
    public function a_pdfReport_can_be_retrieved_for_a_finished_nonFreescan_scan()
    {
        $siwecosScan = $this->getFinishedScan([], ['is_freescan' => false])->siwecosScans->first();

        $response = $this->post('/api/v2/scan/' . $siwecosScan->id . '/en/pdf', ['SIWECOS-Token' => $siwecosScan->domain->token->token]);

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
    }

    /** @test */
    public function if_a_scan_is_not_finished_no_pdf_report_will_be_generated()
    {
        $siwecosScan = $this->getStartedScan([], ['is_freescan' => true])->siwecosScans->first();

        $response = $this->post('/api/v2/scan/' . $siwecosScan->id . '/en/pdf');

        $response->assertStatus(409);
    }

    /** @test */
    public function a_siwecosPdfReport_can_be_retrieved_for_a_finished_freescan_scan()
    {
        $this->withoutExceptionHandling();
        $siwecosScan = $this->getFinishedScan([], ['is_freescan' => true])->siwecosScans->first();

        $response = $this->post('/api/v2/siwecosScan/' . $siwecosScan->id . '/en/pdf');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
    }

    /** @test */
    public function a_siwecosPdfReport_can_be_retrieved_for_a_finished_nonFreescan_scan()
    {
        $siwecosScan = $this->getFinishedScan([], ['is_freescan' => false])->siwecosScans->first();

        $response = $this->post('/api/v2/siwecosScan/' . $siwecosScan->id . '/en/pdf', ['SIWECOS-Token' => $siwecosScan->domain->token->token]);

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
    }

    /** @test */
    public function if_a_scan_is_not_finished_no_siwecosPdfReport_will_be_generated()
    {
        $siwecosScan = $this->getStartedScan([], ['is_freescan' => true])->siwecosScans->first();

        $response = $this->post('/api/v2/siwecosScan/' . $siwecosScan->id . '/en/pdf');

        $response->assertStatus(409);
    }
}
