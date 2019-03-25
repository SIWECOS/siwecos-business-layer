<?php

namespace Tests;

use App\CoreAPI;
use App\User;
use Artisan;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use App\Token;
use App\Domain;
use App\HTTPClient;
use App\Scan;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Returns an activated User.
     *
     * @param array $attributes
     * @return \App\User
     */
    protected function getActivatedUser($attributes = [])
    {
        return factory(User::class)->create(array_merge($attributes, ['active' => true]));
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
     * Returns a generated Scan.
     *
     * @param array $attributes
     * @return Scan
     */
    protected function getGeneratedScan($attributes = [])
    {
        $domain = $this->getRegisteredDomain();
        return $domain->scans()->create(factory(Scan::class)->make($attributes)->toArray());
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
