<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DomainSiwecosScanReportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_latest_siwecosScanReport_can_be_requested_via_the_domain_parameter()
    {
        $scan = $this->getFinishedScan([], ['is_freescan' => true]);
        $response = $this->get('/api/v2/domain/' . $scan->siwecosScans->first()->domain->domain . '/fullreport');

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'headline' => 'Überprüfung auf mögliche <a target="siwecos_wiki" href="https://siwecos.de/wiki/Phishing-Inhalte/DE" title="Phishing-Inhalte/DE">Phishing-Inhalte</a>',
            'information_link' => 'https://siwecos.de/wiki/Phishing-Inhalte/DE',
            'result' => 'Ihre <a target="siwecos_wiki" href="https://siwecos.de/wiki/Domain" title="Domain">Domain</a> wurde in keiner uns bekannten <a target="siwecos_wiki" href="https://siwecos.de/wiki/Listen" title="Listen">Phishing-Liste</a> gefunden.',
        ]);
    }

    /** @test */
    public function a_latest_nonFree_siwecosScanReport_can_be_requested_via_the_domain_parameter_and_requires_a_valid_token()
    {
        $siwecosScan = $this->getFinishedScan([], ['is_freescan' => false])->siwecosScans->first();
        $response = $this->get(
            '/api/v2/domain/' . $siwecosScan->domain->domain . '/fullreport',
            ['SIWECOS-Token' => $siwecosScan->domain->token->token]
        );

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'headline' => 'Überprüfung auf mögliche <a target="siwecos_wiki" href="https://siwecos.de/wiki/Phishing-Inhalte/DE" title="Phishing-Inhalte/DE">Phishing-Inhalte</a>',
            'information_link' => 'https://siwecos.de/wiki/Phishing-Inhalte/DE',
            'result' => 'Ihre <a target="siwecos_wiki" href="https://siwecos.de/wiki/Domain" title="Domain">Domain</a> wurde in keiner uns bekannten <a target="siwecos_wiki" href="https://siwecos.de/wiki/Listen" title="Listen">Phishing-Liste</a> gefunden.',
        ]);
    }

    /** @test */
    public function if_no_siwecosScan_was_found_an_httpError_404_will_be_returned()
    {
        $response = $this->get('/api/v2/domain/example.org/fullreport');

        $response->assertStatus(404);
    }

    /** @test */
    public function the_siwecosScan_report_language_can_be_changed_via_the_language_route_parameter()
    {
        $scan = $this->getFinishedScan([], ['is_freescan' => true])->siwecosScans->first();
        $response = $this->get('/api/v2/domain/' . $scan->domain->domain . '/fullreport/en');

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'headline' => 'Check for potential phishing content',
            'information_link' => 'https://siwecos.de/wiki/Phishing-Content/EN',
            'result' => 'Your domain was not found in any of the known phishing lists.',
        ]);
    }

    /** @test */
    public function if_no_nonFreeScan_was_found_but_a_freeScan_return_the_siwecosReport_for_the_freeScan_instead_an_error()
    {
        $siwecosScan = $this->getFinishedScan([], ['is_freescan' => true])->siwecosScans->first();
        $response = $this->get(
            '/api/v2/domain/' . $siwecosScan->domain->domain . '/fullreport',
            ['SIWECOS-Token' => $siwecosScan->domain->token->token]
        );

        $response->assertStatus(200);
    }
}
