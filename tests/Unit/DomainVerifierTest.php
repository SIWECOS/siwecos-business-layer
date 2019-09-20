<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\DomainVerifier;
use Exception;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\TooManyRedirectsException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Exceptions\HttpResponseException;

class DomainVerifierTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_domainVerifier_accepts_a_mocked_http_client()
    {
        $client = $this->getMockedHttpClient([
            new Response(200)
        ]);

        $verifier = new DomainVerifier($this->getRegisteredDomain(), $client);

        $this->assertInstanceOf(DomainVerifier::class, $verifier);
    }

    /** @test */
    public function the_domainVerifier_can_verify_a_token_html_page()
    {
        $domain = $this->getRegisteredDomain();
        $client = $this->getMockedHttpClient([
            new Response(200, [], $domain->verification_token),

            new Response(200, [], "something-before " . $domain->verification_token),
            new Response(200, [], $domain->verification_token . " something-behind"),
            new Response(403),
            new Response(301),
        ]);

        $verifier = new DomainVerifier($domain, $client);

        $this->assertTrue($verifier->checkHtmlPage());

        $this->assertFalse($verifier->checkHtmlPage());
        $this->assertFalse($verifier->checkHtmlPage());
        $this->assertFalse($verifier->checkHtmlPage());
        $this->assertFalse($verifier->checkHtmlPage());
    }

    /** @test */
    public function the_domainVerifier_can_verify_a_token_meta_tag_successfully()
    {
        $domain = $this->getRegisteredDomain();
        $client = $this->getMockedHttpClient([
            new Response(200, [], $this->getDummyHtmlWithSIWECOSMetaTag($domain->verification_token)),
        ]);

        $verifier = new DomainVerifier($domain, $client);

        $this->assertTrue($verifier->checkMetaTag());
    }

    /** @test */
    public function the_domainVerifier_can_verify_a_token_meta_tag_only_without_additional_chars()
    {
        $domain = $this->getRegisteredDomain();
        $client = $this->getMockedHttpClient([
            new Response(200, [], $this->getDummyHtmlWithSIWECOSMetaTag("something-before " . $domain->verification_token)),
            new Response(200, [], $this->getDummyHtmlWithSIWECOSMetaTag($domain->verification_token . " something-behind")),
            new Response(200, [], $this->getDummyHtmlWithSIWECOSMetaTag(null, $domain->verification_token))
        ]);

        $verifier = new DomainVerifier($domain, $client);

        $this->assertFalse($verifier->checkMetaTag());
        $this->assertFalse($verifier->checkMetaTag());
        $this->assertFalse($verifier->checkMetaTag());
    }

    /** @test */
    public function the_domainVerifier_can_verify_a_token_meta_tag_client_error_as_false()
    {
        $domain = $this->getRegisteredDomain();
        $client = $this->getMockedHttpClient([
            new Response(403),
            new Response(404),
        ]);

        $verifier = new DomainVerifier($domain, $client);

        $this->assertFalse($verifier->checkMetaTag());
        $this->assertFalse($verifier->checkMetaTag());
    }

    /** @test */
    public function the_domainVerifier_can_verify_a_token_meta_tag_redirect_as_false()
    {
        $domain = $this->getRegisteredDomain();
        $client = $this->getMockedHttpClient([
            new Response(301),
            new Response(302),
        ]);

        $verifier = new DomainVerifier($domain, $client);

        $this->assertFalse($verifier->checkMetaTag());
        $this->assertFalse($verifier->checkMetaTag());
    }

    /** @test */
    public function the_domainVerifier_provides_a_simple_verify_method()
    {
        $domain = $this->getRegisteredDomain();

        // verify preferred way with external HTML page
        $client = $this->getMockedHttpClient([
            new Response(200, [], $domain->verification_token)
        ]);
        $verifier = new DomainVerifier($domain, $client);
        $this->assertTrue($verifier->verify());

        // verify meta Tag, needs 2 requests for testing
        $client = $this->getMockedHttpClient([
            new Response(200),
            new Response(200, [], $this->getDummyHtmlWithSIWECOSMetaTag($domain->verification_token))
        ]);
        $verifier = new DomainVerifier($domain, $client);
        $this->assertTrue($verifier->verify());

        // do not verify a 301 response, needs also 2 requests testing
        $client = $this->getMockedHttpClient([
            new Response(301),
            new Response(301)
        ]);
        $verifier = new DomainVerifier($domain, $client);
        $this->assertFalse($verifier->verify());

        // do not verify 2 empty success responses
        $client = $this->getMockedHttpClient([
            new Response(200),
            new Response(200)
        ]);
        $verifier = new DomainVerifier($domain, $client);
        $this->assertFalse($verifier->verify());
    }

    /** @test */
    public function the_domainVerifier_catches_exceptions_and_delivers_useful_information_for_the_user()
    {
        $domain = $this->getRegisteredDomain();

        $client = $this->getMockedHttpClient([
            new ConnectException('cURL error 28: Could not resolve host', new Request('GET', $domain->url)),
            new TooManyRedirectsException('Too many redirects occured', new Request('GET', $domain->url)),
            new BadResponseException('Failure 500: Internal server error', new Request('GET', $domain->url)),
            new ClientException('A client error 4xx occured.', new Request('GET', $domain->url)),
            new ServerException('A server error 5xx occured.', new Request('GET', $domain->url)),
            new \Exception('Unexpectd!')
        ]);

        try {
            $response = (new DomainVerifier($domain, $client))->verify();
        } catch (HttpResponseException $e) {
            $response = $e->getResponse();

            $this->assertEquals(409, $response->getStatusCode());
            $this->assertJsonStringEqualsJsonString('{
                "message": "siwecos.CONNECTEXCEPTION"
            }', $response->getContent());
        }

        try {
            $response = (new DomainVerifier($domain, $client))->verify();
        } catch (HttpResponseException $e) {
            $response = $e->getResponse();
            $this->assertEquals(409, $response->getStatusCode());
            $this->assertJsonStringEqualsJsonString('{
               "message": "siwecos.TOOMANYREDIRECTSEXCEPTION"
            }', $response->getContent());
        }

        try {
            $response = (new DomainVerifier($domain, $client))->verify();
        } catch (HttpResponseException $e) {
            $response = $e->getResponse();
            $this->assertEquals(409, $response->getStatusCode());
            $this->assertJsonStringEqualsJsonString('{
               "message": "siwecos.BADRESPONSEEXCEPTION"
            }', $response->getContent());
        }

        try {
            $response = (new DomainVerifier($domain, $client))->verify();
        } catch (HttpResponseException $e) {
            $response = $e->getResponse();
            $this->assertEquals(409, $response->getStatusCode());
            $this->assertJsonStringEqualsJsonString('{
               "message": "siwecos.CLIENTEXCEPTION"
            }', $response->getContent());
        }

        try {
            $response = (new DomainVerifier($domain, $client))->verify();
        } catch (HttpResponseException $e) {
            $response = $e->getResponse();
            $this->assertEquals(409, $response->getStatusCode());
            $this->assertJsonStringEqualsJsonString('{
               "message": "siwecos.SERVEREXCEPTION"
            }', $response->getContent());
        }

        try {
            $response = (new DomainVerifier($domain, $client))->verify();
        } catch (HttpResponseException $e) {
            $response = $e->getResponse();
            $this->assertEquals(409, $response->getStatusCode());
            $this->assertJsonStringEqualsJsonString('{
               "message": "siwecos.EXCEPTION"
            }', $response->getContent());
        }

        $this->assertFalse($domain->refresh()->is_verified);
    }

    /**
     * Returns an dummy HTML page with the SIWECOS Meta Tag with the given $token.
     *
     * @param string $token Value for siwecostoken meta tag.
     * @param string $body Additional content within the HTML body.
     * @return string HTML Page
     */
    protected function getDummyHtmlWithSIWECOSMetaTag($token, $body = null)
    {
        return '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="siwecostoken" content="' . $token . '"></meta>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Test-Website</title>
        </head>
        <body>
                Lorem ipsum,
            dolor sit amet consectetur a dipisicing elit. Nihil deleniti nemo eaque,
            consequatur dolores dolorem quasi soluta ipsam magnam possimus quibusdam,
            ab mollitia recusanda e  id   i n  esse delectus et accusamus.
                  <br><br>
                   ' . $body . '
                </body>
                </html>';
    }
}
