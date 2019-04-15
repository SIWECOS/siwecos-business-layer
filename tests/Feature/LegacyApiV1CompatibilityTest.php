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

class LegacyApiV1CompatibilityTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $knownDate = Carbon::create(2019, 4, 15, 8, 30, 15);
        Carbon::setTestNow($knownDate);
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
            'domainToken' => Domain::first()->verification_token
        ]);
    }

    /** @test */
    public function a_domain_can_be_verified()
    {
        $user = $this->getActivatedUser();
        $user->token->domains()->create(factory(Domain::class)->make(['url' => 'https://example.org'])->toArray());

        //  Mock the HTTPClient
        $client = $this->getMockedHttpClient([
            new Response(200, [], Domain::first()->verification_token),
        ]);
        $this->app->bind(DomainController::class, function ($app) use ($client) {
            return new DomainController($client);
        });

        // Send the verification request via old API
        $response = $this->json('POST', '/api/v1/domains/verifyDomain', [
            'domain' => Domain::first()->url
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
            'domain' => Domain::first()->url
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
        $user->token->domains()->create(factory(Domain::class)->make(['url' => 'https://siwecos.de'])->toArray());

        $response = $this->json('POST', '/api/v1/domains/listDomains', [], ['userToken' => $user->token->token]);

        $response->assertStatus(200);

        $domain1 = Domain::whereUrl('https://example.org')->first();
        $domain2 = Domain::whereUrl('https://siwecos.de')->first();

        $response->assertExactJson([
            'message' => 'List of all domains',
            'hasFailed' => false,
            'domains' => [
                [
                    'id' => $domain1->id,
                    'domain' => $domain1->url,
                    'verificationStatus' => $domain1->is_verified,
                    'domainToken' => $domain1->verification_token
                ],
                [
                    'id' => $domain2->id,
                    'domain' => $domain2->url,
                    'verificationStatus' => $domain2->is_verified,
                    'domainToken' => $domain2->verification_token
                ]
            ]
        ]);
    }

    /** @test */
    public function a_scan_can_be_started()
    {
        Queue::fake();

        $user = factory(User::class)->create();
        $domain = $user->token->domains()->create(factory(Domain::class)->make(['is_verified' => true])->toArray());

        $response = $this->json('POST', '/api/v1/scan/start', [
            'domain' => $domain->url
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
        $this->withoutExceptionHandling();
        $scan = $this->getFinishedScan(['is_freescan' => true]);

        $response = $this->get('/api/v1/scan/result/de?domain=https://example.org');

        $response->assertStatus(200);

        $response->assertJson($this->getExampleLegacyScanReportJsonArray());
    }

    /** @test */
    public function the_legacy_freescan_results_api_route_also_delivers_the_scan_report_for_freescans()
    {
        $scan = $this->getFinishedScan(['is_freescan' => true]);

        $response = $this->get('/api/v1/freescan/result/' . $scan->id . '/de');

        $response->assertStatus(200);
        $response->assertJson($this->getExampleLegacyScanReportJsonArray());
    }

    /** @test */
    public function the_scan_report_can_be_retrieved_for_non_freescans_if_user_is_authenticated()
    {
        $scan = $this->getFinishedScan(['is_freescan' => false]);

        $response = $this->get('/api/v1/scan/result/de?domain=https://example.org');
        $response->assertStatus(403);

        $response = $this->get('/api/v1/scan/result/de?domain=https://example.org', [
            'userToken' => $scan->token->token
        ]);
        $response->assertStatus(200);

        $response->assertJson($this->getExampleLegacyScanReportJsonArray($scan->token->token));
    }

    /** @test */
    public function only_for_existing_scans_a_report_can_be_requested()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/api/v1/scan/result/de?domain=https://example.org');

        $response->assertStatus(404);
    }


    protected function getExampleLegacyScanReportJsonArray(string $token = 'NOTAVAILABLE')
    {
        return [
            'scanStarted' => [
                'date' => Carbon::now()->toDateTimeString() . '.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ],
            'scanFinished' => [
                // 'date' => '2019-03-27 16:18:13.000000',
                'date' => Carbon::now()->toDateTimeString() . '.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC'
            ],
            'hasFailed' => false,
            'hasCrit' => false,
            'message' => 'current state of requested token',
            'token' => $token,
            'weightedMedia' => 87,
            'scanners' => [
                [
                    'scan_id' => 1,
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
                    'created_at' => '2019-03-27 16:18:13',
                    'updated_at' => '2019-03-27 16:18:13',
                    'total_score' => 100,
                    'has_error' => false,
                    'score' => 100,
                    'scanner_code' => 'INI_S'
                ],
                [
                    'scan_id' => 1,
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
                    'created_at' => '2019-03-27 16:18:13',
                    'updated_at' => '2019-03-27 16:18:14',
                    'total_score' => 50,
                    'has_error' => false,
                    'score' => 50,
                    'scanner_code' => 'DOMXSS'
                ]
            ]
        ];
    }
}
