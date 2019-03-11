<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\DomainVerifier;
use GuzzleHttp\Psr7\Response;
use App\Domain;
use App\Token;

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
    public function the_domainVerifier_can_verify_a_token_meta_tag()
    {
        $domain = $this->getRegisteredDomain();
        $client = $this->getMockedHttpClient([
            new Response(200, [], $this->getDummyHtmlWithSIWECOSMetaTag($domain->verification_token)),

            new Response(200, [], $this->getDummyHtmlWithSIWECOSMetaTag("something-before " . $domain->verification_token)),
            new Response(200, [], $this->getDummyHtmlWithSIWECOSMetaTag($domain->verification_token . " something-behind")),
            new Response(403),
            new Response(301),
            new Response(200, [], $this->getDummyHtmlWithSIWECOSMetaTag(null, $domain->verification_token))
        ]);

        $verifier = new DomainVerifier($domain, $client);

        $this->assertTrue($verifier->checkMetaTag());

        $this->assertFalse($verifier->checkMetaTag());
        $this->assertFalse($verifier->checkMetaTag());
        $this->assertFalse($verifier->checkMetaTag());
        $this->assertFalse($verifier->checkMetaTag());
        $this->assertFalse($verifier->checkMetaTag());
    }

    /** @test */
    public function the_domainVerifier_provides_a_simple_verify_method()
    {
        $domain = $this->getRegisteredDomain();
        $client = $this->getMockedHttpClient([
            // verify preferred way with external HTML page
            new Response(200, [], $domain->verification_token),
            // verify meta Tag, needs 2 requests for testing
            new Response(200),
            new Response(200, [], $this->getDummyHtmlWithSIWECOSMetaTag($domain->verification_token)),
            // do not verify a 301 response, needs also 2 requests testing
            new Response(301),
            new Response(301)
        ]);

        $verifier = new DomainVerifier($domain, $client);

        $this->assertTrue($verifier->verify());
        $this->assertTrue($verifier->verify());
        $this->assertFalse($verifier->verify());
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
            <meta name="siwecostoken" value="' . $token . '"></meta>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Test-Website</title>
        </head>
        <body>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil deleniti nemo eaque, consequatur dolores dolorem quasi soluta ipsam magnam possimus quibusdam, ab mollitia recusandae id in esse delectus et accusamus.
            <br><br>
            ' . $body . '
        </body>
        </html>
        ';
    }
}
