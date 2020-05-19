<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\DomainController;
use GuzzleHttp\Psr7\Response;
use App\Domain;
use App\User;
use Illuminate\Support\Facades\Queue;
use App\Jobs\StartScanJob;
use Carbon\Carbon;
use App\Scan;
use App\Token;

class LegacyApiV1CompatibilityTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $knownDate = Carbon::create(2019, 4, 15, 8, 30, 15, 'UTC');
        Carbon::setTestNow($knownDate);

        Token::create(['type' => 'freescan']);
    }

    /** @test */
    public function a_freescan_can_be_started()
    {
        $response = $this->json('POST', '/api/v1/getFreeScanStart', [
            'domain' => 'https://example.org'
        ]);

        $response->assertStatus(200);
        $this->assertCount(1, Domain::all());
        Queue::assertPushed(StartScanJob::class);
        $response->assertJson([
            "progress" => 0,
            "status" => 2,
            "id" => 1,
            "hasFailed" => false,
            "message" => ""
        ]);
    }

    /** @test */
    public function the_status_of_a_running_freescan_can_be_requested()
    {
        $siwecosScan = $this->getStartedScan([], ['is_freescan' => true])->siwecosScans->first();

        $response = $this->json('GET', '/api/v1/scan/status/free/' . $siwecosScan->id);

        $response->assertStatus(200);
        $response->assertJson([
            "progress" => 0,
            "status" => 2,
            "id" => $siwecosScan->id,
            "hasFailed" => false,
            "message" => ""
        ]);
    }

    /** @test */
    public function the_status_of_a_finished_freescan_can_be_requested()
    {
        $scan = $this->getFinishedScan([], ['is_freescan' => true]);

        $response = $this->json('GET', '/api/v1/scan/status/free/' . $scan->id);

        $response->assertStatus(200);
        $response->assertJson([
            "progress" => 100,
            "status" => 3,
            "id" => $scan->id,
            "hasFailed" => false,
            "message" => ""
        ]);
    }

    /** @test */
    public function a_new_domain_can_be_registered()
    {
        $user = $this->getActivatedUser();

        $response = $this->json('POST', '/api/v1/domains/addNewDomain', [
            'domain' => 'https://example.org'
        ], ['userToken' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertCount(1, Domain::all());

        $response->assertExactJson([
            'message' => 'Domain was created',
            'hasFailed' => false,
            'domainId' => 1,
            'verificationStatus' => false,
            'domainToken' => $user->token->verification_token
        ]);
    }

    /** @test */
    public function a_domain_can_be_verified()
    {
        $user = $this->getActivatedUser();
        $user->token->domains()->create(factory(Domain::class)->make(['domain' => 'example.org'])->toArray());

        //  Mock the HTTPClient
        $client = $this->getMockedHttpClient([
            new Response(200, [], Domain::first()->token->verification_token),
        ]);
        $this->app->bind(DomainController::class, function ($app) use ($client) {
            return new DomainController($client);
        });

        // Send the verification request via old API
        $response = $this->json('POST', '/api/v1/domains/verifyDomain', [
            'domain' => Domain::first()->mainUrl
        ], ['userToken' => $user->token->token]);

        // Get the Domain successfully verified
        $response->assertStatus(200);
        $this->assertTrue(Domain::first()->is_verified);

        $response->assertExactJson([
            'message' => 'Page successful validated',
            'hasFailed' => false
        ]);
    }

    /** @test */
    public function a_domain_can_be_deleted()
    {
        $user = factory(User::class)->create();
        $user->token->domains()->create(factory(Domain::class)->make()->toArray());

        $this->assertCount(1, Domain::all());

        $response = $this->json('POST', '/api/v1/domains/deleteDomain', [
            'domain' => Domain::first()->mainUrl
        ], ['userToken' => $user->token->token]);

        $response->assertStatus(200);
        $this->assertCount(0, Domain::all());

        $response->assertExactJson([
            'message' => 'Domain removed',
            'hasFailed' => false
        ]);
    }

    /** @test */
    public function a_domain_list_can_be_retrieved()
    {
        $user = factory(User::class)->create();
        $user->token->domains()->create(factory(Domain::class)->make()->toArray());
        $user->token->domains()->create(factory(Domain::class)->make(['domain' => 'siwecos.de'])->toArray());

        $response = $this->json('POST', '/api/v1/domains/listDomains', [], ['userToken' => $user->token->token]);

        $response->assertStatus(200);

        $domain1 = Domain::whereDomain('example.org')->first();
        $domain2 = Domain::whereDomain('siwecos.de')->first();

        $response->assertExactJson([
            'message' => 'List of all domains',
            'hasFailed' => false,
            'domains' => [
                [
                    'id' => $domain1->id,
                    'domain' => $domain1->mainUrl,
                    'verificationStatus' => $domain1->is_verified,
                    'domainToken' => $domain1->token->verification_token
                ],
                [
                    'id' => $domain2->id,
                    'domain' => $domain2->mainUrl,
                    'verificationStatus' => $domain2->is_verified,
                    'domainToken' => $domain2->token->verification_token
                ]
            ]
        ]);
    }

    /** @test */
    public function a_scan_can_be_started()
    {
        $user = factory(User::class)->create();
        $domain = $user->token->domains()->create(factory(Domain::class)->make(['is_verified' => true])->toArray());

        $response = $this->json('POST', '/api/v1/scan/start', [
            'domain' => $domain->mainUrl
        ], ['userToken' => $user->token->token]);

        $response->assertStatus(200);
        Queue::assertPushed(StartScanJob::class);
        $response->assertExactJson([
            'message' => '',
            'hasFailed' => false,
            'id' => 1,
            'status' => 2,
            'progress' => 0
        ]);
    }

    /** @test */
    public function the_scan_report_can_be_retrieved_for_freescans()
    {
        $this->getFinishedScan([], ['is_freescan' => true]);

        $response = $this->get('/api/v1/scan/result/de?domain=https://example.org');

        $response->assertStatus(200);

        $response->assertJson($this->getExampleLegacyScanReportJsonArray());
    }

    /** @test */
    public function the_legacy_freescan_results_api_route_also_delivers_the_scan_report_for_freescans()
    {
        $scan = $this->getFinishedScan([], ['is_freescan' => true]);

        $response = $this->get('/api/v1/freescan/result/' . $scan->id . '/de');

        $response->assertStatus(200);
        $response->assertJson($this->getExampleLegacyScanReportJsonArray());
    }

    /** @test */
    public function the_scan_report_can_be_retrieved_for_non_freescans_if_user_is_authenticated()
    {
        $scan = $this->getFinishedScan([], ['is_freescan' => false]);

        $response = $this->get('/api/v1/scan/result/de?domain=https://example.org');
        $response->assertStatus(404);

        $response = $this->get('/api/v1/scan/result/de?domain=https://example.org', [
            'userToken' => $scan->siwecosScans->first()->domain->token->token
        ]);
        $response->assertStatus(200);

        $response->assertJson($this->getExampleLegacyScanReportJsonArray($scan->siwecosScans->first()->domain->token->token));
    }

    /** @test */
    public function the_scan_report_can_be_retrieved_with_the_content_type_header_set_to_json_for_free_and_nonFree_scans()
    {
        $scan = $this->getFinishedScan([], ['is_freescan' => false]);
        $response = $this->get('/api/v1/scan/result/de?domain=https://example.org', [
            'userToken' => $scan->siwecosScans->first()->domain->token->token,
            'Content-Type' => 'application/json;charset=UTF-8'
        ]);
        $response->assertStatus(200);

        $scan = $this->getFinishedScan([], ['is_freescan' => true]);
        $response = $this->get('/api/v1/scan/result/de?domain=https://example.org', [
            'userToken' => $scan->siwecosScans->first()->domain->token->token,
            'Content-Type' => 'application/json;charset=UTF-8'
        ]);
        $response->assertStatus(200);
    }

    /** @test */
    public function only_for_existing_scans_a_report_can_be_requested()
    {
        $response = $this->get('/api/v1/scan/result/de?domain=https://example.org');

        $response->assertStatus(404);
    }

    /** @test */
    public function the_translated_errorMessage_will_be_included_if_a_scanner_has_a_global_error()
    {
        $scan = $this->getStartedScan([], ['is_freescan' => true]);
        $scan->results = json_decode('[{"startedAt":"2019-09-05T09:50:46Z","finishedAt":"2019-09-05T09:50:52Z","name":"TLS","version":"3.1.0","hasError":true,"errorMessage":{"translationStringId":"REPORT_CONSTRUCTION","placeholders":{"errorMessage":null}},"score":0,"tests":[]}]', true);
        $scan->save();

        $response = $this->get('/api/v1/scan/result/de?domain=https://example.org');

        $response->assertStatus(200);

        $response->assertJsonFragment([
            'error_message' => 'TLS.REPORT_CONSTRUCTION'
        ]);
    }

    /** @test */
    public function if_a_scan_failed_the_status_will_be_returned_correctly_by_the_status_endpoint()
    {
        $scan = $this->getFailedScan([], ['is_freescan' => true]);

        $response = $this->get('/api/v1/scan/status/free/' . $scan->id);

        $response->assertStatus(409);
        $response->assertJsonFragment(['message' => 'Scan failed']);
    }

    protected function getExampleLegacyScanReportJsonArray(string $token = 'NOTAVAILABLE')
    {
        return [
            'scanStarted' => [
                'date' => Carbon::now('UTC')->toDateTimeString() . '.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ],
            'scanFinished' => [
                'date' => Carbon::now('UTC')->toDateTimeString() . '.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ],
            'id' => 1,
            'hasFailed' => false,
            'hasCrit' => false,
            'message' => 'current state of requested token',
            'token' => 'NOTAVAILABLE',
            'weightedMedia' => 87,
            'scanners' => [
                [
                    'scanner_type' => 'Initiative-S Scanner',
                    'result' => [
                        [
                            'name' => 'Überprüfung auf mögliche <a target="siwecos_wiki" href="https://siwecos.de/wiki/Phishing-Inhalte/DE" title="Phishing-Inhalte/DE">Phishing-Inhalte</a>',
                            'hasError' => false,
                            'errorMessage' => null,
                            'score' => 100,
                            'testDetails' => [],
                            'link' => 'https://siwecos.de/wiki/Phishing-Inhalte/DE',
                            'description' => 'Ihre <a target="siwecos_wiki" href="https://siwecos.de/wiki/Domain" title="Domain">Domain</a> wurde in keiner uns bekannten <a target="siwecos_wiki" href="https://siwecos.de/wiki/Listen" title="Listen">Phishing-Liste</a> gefunden.',
                            'report' => null,
                            'scoreTypeRaw' => 'success',
                        ],
                        [
                            'name' => 'Überprüfung auf mögliche <a target="siwecos_wiki" href="https://siwecos.de/wiki/Spam-Inhalte/DE" title="Spam-Inhalte/DE">Spam-Inhalte</a>',
                            'hasError' => false,
                            'errorMessage' => null,
                            'score' => 100,
                            'testDetails' => [],
                            'link' => 'https://siwecos.de/wiki/Spam-Inhalte/DE',
                            'description' => 'Ihre <a target="siwecos_wiki" href="https://siwecos.de/wiki/Domain" title="Domain">Domain</a> wurde in keiner uns bekannten <a target="siwecos_wiki" href="https://siwecos.de/wiki/Listen" title="Listen">Spam-Liste</a> gefunden.',
                            'report' => null,
                            'scoreTypeRaw' => 'success',
                        ],
                        [
                            'name' => 'Überprüfung auf mögliche <a target="siwecos_wiki" href="https://siwecos.de/wiki/Malware-Inhalte/DE" title="Malware-Inhalte/DE">MALWARE-Inhalte</a>',
                            'hasError' => false,
                            'errorMessage' => null,
                            'score' => 100,
                            'testDetails' => [],
                            'link' => 'https://siwecos.de/wiki/Malware-Inhalte/DE',
                            'description' => 'Ihre <a target="siwecos_wiki" href="https://siwecos.de/wiki/Domain" title="Domain">Domain</a> wurde in keiner uns bekannten <a target="siwecos_wiki" href="https://siwecos.de/wiki/Listen" title="Listen">Malware-Liste</a> gefunden.',
                            'report' => null,
                            'scoreTypeRaw' => 'success',
                        ]
                    ],
                    'created_at' => '2019-03-27 16:18:13.000000',
                    'updated_at' => '2019-03-27 16:18:13.000000',
                    'total_score' => 100,
                    'has_error' => false,
                    'score' => 100,
                    'scanner_code' => 'INI_S'
                ],
                [
                    'scanner_type' => 'DOMXSS Scanner',
                    'result' => [
                        [
                            'name' => 'Überprüfung des JavaScript-Codes nach DOMXSS-Sources',
                            'hasError' => false,
                            'errorMessage' => null,
                            'score' => 100,
                            'testDetails' => [
                                [
                                    'report' => 'Es wurden keine „<a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sources" title="DOMXSS-Sources">DOMXSS-Sources</a>“ gefunden.',
                                    'name' => 'Es wurden keine „<a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sources" title="DOMXSS-Sources">DOMXSS-Sources</a>“ gefunden.'
                                ]
                            ],
                            'link' => 'https://siwecos.de/wiki/Schadcode-Ueber-Fremde-Quellen/DE',
                            'description' => 'Automatisiert wurden keine unsicheren Codebestandteile für <a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sources" title="DOMXSS-Sources">DOMXSS-Sources</a> erkannt.',
                            'report' => null,
                            'scoreTypeRaw' => 'info'
                        ],
                        [
                            'name' => 'Überprüfung des JavaScript-Codes nach DOMXSS-Sinks',
                            'hasError' => false,
                            'errorMessage' => null,
                            'score' => 0,
                            'testDetails' => [
                                [
                                    'report' => 'Es wurden „<a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS-Sinks</a>“ gefunden.',
                                    'name' => 'Es wurden „<a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS-Sinks</a>“ gefunden.'
                                ]
                            ],
                            'link' => 'https://siwecos.de/wiki/DOMXSS-Schwachstelle/DE',
                            'description' => 'Unsicheren <a target="siwecos_wiki" href="https://siwecos.de/wiki/JavaScript" title="JavaScript">JavaScript</a>-Code verwendet <a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS-Sinks</a>.',
                            'report' => '<p>Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der unter bestimmten Voraussetzungen auf eine DOM-basierende <a target="siwecos_wiki" href="https://siwecos.de/wiki/Cross-Site_Scripting" title="Cross-Site Scripting">Cross-Site Scripting-Anfälligkeit</a> hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen. </p>',
                            'scoreTypeRaw' => 'info'
                        ]
                    ],
                    'created_at' => '2019-03-27 16:18:13.000000',
                    'updated_at' => '2019-03-27 16:18:14.000000',
                    'total_score' => 50,
                    'has_error' => false,
                    'score' => 50,
                    'scanner_code' => 'DOMXSS'
                ]
            ]
        ];
    }
}
