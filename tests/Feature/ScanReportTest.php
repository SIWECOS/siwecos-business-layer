<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Log;

class ScanReportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_translated_and_reasonable_json_scan_report_can_be_retrieved_for_finished_scans()
    {
        $scan = $this->getFinishedScan(['is_freescan' => true]);

        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
        $response->assertJson([
            'started_at' => $scan->started_at->toIso8601ZuluString(),
            'finished_at' => $scan->finished_at->toIso8601ZuluString(),
            'has_error' => false,
            'status' => 'finished',
            'report' => [
                [
                    'scanner_name' => 'Initiative-S Scanner',
                    'scanner_code' => 'INI_S',
                    'has_error' => false,
                    'error_message' => null,
                    'score' => 100,
                    'started_at' => '2019-03-27T16:18:13Z',
                    'finished_at' => '2019-03-27T16:18:13Z',
                    'tests' => [
                        [
                            'headline' => 'Überprüfung auf mögliche <a target="siwecos_wiki" href="https://siwecos.de/wiki/Phishing-Inhalte/DE" title="Phishing-Inhalte/DE">Phishing-Inhalte</a>',
                            'has_error' => false,
                            'score' => 100,
                            'score_type' => 'success',
                            'information_link' => 'https://siwecos.de/wiki/Phishing-Inhalte/DE',
                            'result' => 'Ihre <a target="siwecos_wiki" href="https://siwecos.de/wiki/Domain" title="Domain">Domain</a> wurde in keiner uns bekannten <a target="siwecos_wiki" href="https://siwecos.de/wiki/Listen" title="Listen">Phishing-Liste</a> gefunden.',
                            'result_description' => null,
                            'result_details' => null,
                        ],
                        [
                            'headline' => 'Überprüfung auf mögliche <a target="siwecos_wiki" href="https://siwecos.de/wiki/Spam-Inhalte/DE" title="Spam-Inhalte/DE">Spam-Inhalte</a>',
                            'has_error' => false,
                            'score' => 100,
                            'score_type' => 'success',
                            'information_link' => 'https://siwecos.de/wiki/Spam-Inhalte/DE',
                            'result' => 'Ihre <a target="siwecos_wiki" href="https://siwecos.de/wiki/Domain" title="Domain">Domain</a> wurde in keiner uns bekannten <a target="siwecos_wiki" href="https://siwecos.de/wiki/Listen" title="Listen">Spam-Liste</a> gefunden.',
                            'result_description' => null,
                            'result_details' => null,
                        ],
                        [
                            'headline' => 'Überprüfung auf mögliche <a target="siwecos_wiki" href="https://siwecos.de/wiki/Malware-Inhalte/DE" title="Malware-Inhalte/DE">MALWARE-Inhalte</a>',
                            'has_error' => false,
                            'score' => 100,
                            'score_type' => 'success',
                            'information_link' => 'https://siwecos.de/wiki/Malware-Inhalte/DE',
                            'result' => 'Ihre <a target="siwecos_wiki" href="https://siwecos.de/wiki/Domain" title="Domain">Domain</a> wurde in keiner uns bekannten <a target="siwecos_wiki" href="https://siwecos.de/wiki/Listen" title="Listen">Malware-Liste</a> gefunden.',
                            'result_description' => null,
                            'result_details' => null,
                        ]
                    ]
                ],
                [
                    'scanner_name' => 'DOMXSS Scanner',
                    'scanner_code' => 'DOMXSS',
                    'has_error' => false,
                    'error_message' => null,
                    'score' => 50,
                    'started_at' => '2019-03-27T16:18:13Z',
                    'finished_at' => '2019-03-27T16:18:14Z',
                    'tests' => [
                        [
                            'headline' => 'Überprüfung des JavaScript-Codes nach DOMXSS-Sources',
                            'has_error' => false,
                            'score' => 100,
                            'score_type' => 'info',
                            'information_link' => 'https://siwecos.de/wiki/Schadcode-Ueber-Fremde-Quellen/DE',
                            'result' => 'Automatisiert wurden keine unsicheren Codebestandteile für <a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sources" title="DOMXSS-Sources">DOMXSS-Sources</a> erkannt.',
                            'result_description' => null,
                            'result_details' => [
                                // NO_SOURCES_FOUND
                                'Es wurden keine „<a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sources" title="DOMXSS-Sources">DOMXSS-Sources</a>“ gefunden.'
                            ],
                        ],
                        [
                            'headline' => 'Überprüfung des JavaScript-Codes nach DOMXSS-Sinks',
                            'has_error' => false,
                            'score' => 0,
                            'score_type' => 'info',
                            'information_link' => 'https://siwecos.de/wiki/DOMXSS-Schwachstelle/DE',
                            'result' => 'Unsicheren <a target="siwecos_wiki" href="https://siwecos.de/wiki/JavaScript" title="JavaScript">JavaScript</a>-Code verwendet <a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS-Sinks</a>.',
                            'result_description' => '<p>Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der unter bestimmten Voraussetzungen auf eine DOM-basierende <a target="siwecos_wiki" href="https://siwecos.de/wiki/Cross-Site_Scripting" title="Cross-Site Scripting">Cross-Site Scripting-Anfälligkeit</a> hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen. </p>',
                            'result_details' => [
                                // SINKS_FOUND
                                'Es wurden „<a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS-Sinks</a>“ gefunden.'
                            ],
                        ]
                    ]
                ],
            ]
        ]);
    }

    /** @test */
    public function a_scan_report_can_only_be_retrieved_for_finished_scans()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);

        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
        $this->assertNull($response->json('report'));
    }

    /** @test */
    public function a_scan_report_can_only_be_retrieved_for_non_failed_scans()
    {
        $scan = $this->getFailedScan(['is_freescan' => true]);

        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
        $this->assertNull($response->json('report'));
    }

    /** @test */
    public function when_a_test_has_an_errorMessage_the_report_should_be_null_and_the_errorMessage_should_be_translated()
    {
        $scan = $this->getStartedScan(['is_freescan' => true]);
        $scan->results = json_decode(file_get_contents(base_path('tests/sampleScanResultWithDOMXSSError.json')), true);
        $scan->save();

        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);

        $response->assertJsonFragment([
            [
                'headline' => 'Überprüfung des JavaScript-Codes nach DOMXSS-Sinks',
                'score' => 0,
                'score_type' => 'info',
                'has_error' => true,
                'result' => 'Der Test lieferte einen Fehler.',
                'result_details' => [
                    // NO_CONTENT
                    'Auf der Seite wurde kein Inhalt gefunden.'
                ],
                'result_description' => null,
                'solution_tips' => '<p>Wenn unsicherer JavaScript-Code gemeldet wird, ist die <a target="siwecos_wiki" href="https://siwecos.de/wiki/Webanwendung" title="Webanwendung">Webanwendung</a> eventuell anfällig für sog. <a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS</a>-Angriffe. Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die <a target="siwecos_wiki" href="https://siwecos.de/wiki/Schwachstellen" title="Schwachstellen">Schwachstellen</a> auf der Webseite zu bestätigen. </p>',
                'information_link' => 'https://siwecos.de/wiki/DOMXSS-Schwachstelle/DE',
            ]
        ]);
    }

    /** @test */
    public function the_default_language_is_german()
    {
        $scan = $this->getFinishedScan(['is_freescan' => true]);

        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);

        $response->assertJsonFragment([
            'headline' => 'Überprüfung auf mögliche <a target="siwecos_wiki" href="https://siwecos.de/wiki/Phishing-Inhalte/DE" title="Phishing-Inhalte/DE">Phishing-Inhalte</a>',
            'information_link' => 'https://siwecos.de/wiki/Phishing-Inhalte/DE',
            'result' => 'Ihre <a target="siwecos_wiki" href="https://siwecos.de/wiki/Domain" title="Domain">Domain</a> wurde in keiner uns bekannten <a target="siwecos_wiki" href="https://siwecos.de/wiki/Listen" title="Listen">Phishing-Liste</a> gefunden.',
        ]);
    }

    /** @test */
    public function the_language_can_be_changed_to_english_via_request_parameter()
    {
        $scan = $this->getFinishedScan(['is_freescan' => true]);

        $response = $this->get('/api/v2/scan/' . $scan->id . '/en');

        $response->assertStatus(200);

        $response->assertJsonFragment([
            'headline' => 'Check for potential phishing content',
            'information_link' => 'https://siwecos.de/wiki/Phishing-Content/EN',
            'result' => 'Your domain was not found in any of the known phishing lists.',
        ]);
    }

    /** @test */
    public function a_freescan_report_can_be_requested_by_everyone_without_authentication()
    {
        $scan = $this->getFinishedScan(['is_freescan' => true]);

        $response = $this->get('/api/v2/scan/' . $scan->id);

        $response->assertStatus(200);
    }

    /** @test */
    public function a_non_freescan_report_can_only_be_requested_by_the_associated_token()
    {
        $scan = $this->getFinishedScan(['is_freescan' => false]);

        $response = $this->get('/api/v2/scan/' . $scan->id);
        $response->assertStatus(403);

        $response = $this->get('/api/v2/scan/' . $scan->id, [
            'SIWECOS-Token' => $scan->token->token
        ]);
        $response->assertStatus(200);
    }

    /** @test */
    public function a_scan_report_can_be_retrieved_even_when_the_scan_results_had_connection_erros()
    {
        $this->withoutExceptionHandling();
        $scan = $this->getStartedScan();
        $scan->results = json_decode(file_get_contents(base_path('tests/sampleScanResultWithConnectionError.json')), true);
        $scan->save();

        $response = $this->get('/api/v2/scan/' . $scan->id, [
            'SIWECOS-Token' => $scan->token->token
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'has_error' => true
        ]);
        $this->assertNotNull($response->json('report'));
    }

    /** @test */
    public function the_scan_report_generation_can_handle_a_missing_errorMessage()
    {
        $scan = $this->getStartedScan();
        $scan->results = json_decode(file_get_contents(base_path('tests/sampleScanResultsWithScannerInterfaceViolations.json')), true);
        $scan->save();

        $response = $this->get('/api/v2/scan/' . $scan->id, [
            'SIWECOS-Token' => $scan->token->token
        ]);

        $response->assertStatus(200);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Scanner Interface Violation!");
        });
    }

    /** @test */
    public function the_scan_report_can_handle_a_wrong_TranslatableMessage_format()
    {
        $scan = $this->getStartedScan();
        $scan->results = json_decode(file_get_contents(base_path('tests/sampleScanResultsWithScannerInterfaceViolations.json')), true);
        $scan->save();

        $response = $this->get('/api/v2/scan/' . $scan->id, [
            'SIWECOS-Token' => $scan->token->token
        ]);

        $response->assertStatus(200);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Scanner Interface Violation!");
        });
    }

    /** @test */
    public function if_a_scanner_has_a_global_error_the_errorMessage_will_be_translated()
    {
        $scan = $this->getStartedScan();
        $scan->results = json_decode('[{"startedAt":"2019-09-05T09:50:46Z","finishedAt":"2019-09-05T09:50:52Z","name":"TLS","version":"3.1.0","hasError":true,"errorMessage":{"translationStringId":"REPORT_CONSTRUCTION","placeholders":{"errorMessage":null}},"score":0,"tests":[]}]', true);
        $scan->save();

        $response = $this->get('/api/v2/scan/' . $scan->id, [
            'SIWECOS-Token' => $scan->token->token
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'error_message' => 'TLS.REPORT_CONSTRUCTION'
        ]);
    }
}
