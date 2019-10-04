<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use App\Token;
use App\Domain;
use App\HTTPClient;
use App\Scan;
use App\SiwecosScan;
use Illuminate\Support\Facades\Notification;
use TiMacDonald\Log\LogFake;
use Illuminate\Support\Facades\Log;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();
        Notification::fake();
        Log::swap(new LogFake);
        \Queue::fake();
    }

    /**
     * Returns an activated User.
     *
     * @param array $attributes
     * @return \App\User
     */
    protected function getActivatedUser($attributes = [])
    {
        return factory(User::class)->create(array_merge($attributes, ['is_active' => true]));
    }

    /**
     * Returns a registered Domain.
     *
     * @param array $attributes
     * @return Domain
     */
    protected function getRegisteredDomain($attributes = [])
    {
        $token = factory(Token::class)->create(['type' => 'external']);
        return $token->domains()->create(factory(Domain::class)->make($attributes)->toArray());
    }

    /**
     * Returns a registered and validated Domain with some crawledUrls.
     *
     * @param array $urls
     * @return Domain
     */
    protected function getDomainWithCrawledUrls(array $urls = [])
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);

        if (count($urls) === 0) {
            $domain->crawledUrls()->create([
                'url' => $domain->mainUrl . '/blog'
            ]);
        } else {
            foreach ($urls as $url) {
                $domain->crawledUrls()->create([
                    'url' => $url
                ]);
            }
        }

        return $domain;
    }

    /**
     * Returns a generated Scan.
     *
     * @param array $attributes
     * @return Scan
     */
    protected function getGeneratedScan(array $scanAttributes = [], array $siwecosScanAttributes = [], array $domainAttributes = [])
    {
        $domain = Domain::first() ?: $this->getRegisteredDomain($domainAttributes);
        $siwecosScan = $domain->siwecosScans()->create(factory(SiwecosScan::class)->make($siwecosScanAttributes)->toArray());
        $scan = $siwecosScan->scans()->create(factory(Scan::class)->make(array_merge(['url' => $siwecosScan->domain->mainUrl], $scanAttributes))->toArray());

        return $scan;
    }

    /**
     * Returns a generated and started scan
     *
     * @param array $attributes
     * @return Scan
     */
    protected function getStartedScan(array $scanAttributes = [], array $siwecosScanAttributes = [], array $domainAttributes = [])
    {
        $scan = $this->getGeneratedScan($scanAttributes, $siwecosScanAttributes, $domainAttributes);
        $scan->started_at = now();
        $scan->save();

        return $scan;
    }

    /**
     * Returns a generated and scan that could not be started
     *
     * @param array $attributes
     * @return Scan
     */
    protected function getFailedScan(array $scanAttributes = [], array $siwecosScanAttributes = [], array $domainAttributes = [])
    {
        $scan = $this->getGeneratedScan($scanAttributes, $siwecosScanAttributes, $domainAttributes);
        $scan->has_error = true;
        $scan->finished_at = now();
        $scan->save();

        return $scan;
    }

    protected function getFinishedScan(array $scanAttributes = [], array $siwecosScanAttributes = [], array $domainAttributes = [])
    {
        $scan = $this->getStartedScan($scanAttributes, $siwecosScanAttributes, $domainAttributes);
        $scan->results = json_decode(file_get_contents(base_path('tests/sampleFreeScanCoreApiResults.json')), true)['results'];
        $scan->save();

        return $scan;
    }

    /**
     * Returns a mocked HTTP-Client for testing purposes.
     *
     * @param array $mockedResponses
     * @return HTTPClient HTTP Client
     */
    protected function getMockedHttpClient(array $mockedResponses)
    {
        $mock = new MockHandler($mockedResponses);
        $handler = HandlerStack::create($mock);
        return new HTTPClient(['handler' => $handler, 'http_errors' => false]);
    }
}
