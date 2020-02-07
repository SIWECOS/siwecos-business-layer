<?php

namespace App;

use voku\helper\HtmlDomParser;
use Illuminate\Support\Str;
use GuzzleHttp\Exception\TransferException;

class DomainVerifier
{
    protected $domain = null;
    protected $client = null;
    protected $token = null;


    public function __construct(Domain $domain, HTTPClient $client = null, Token $token = null)
    {
        $this->domain = $domain;
        $this->client = $client ?: new HTTPClient();
        $this->token = Token::whereToken(request()->header('SIWECOS-Token'))->first() ?: $token;
    }

    /**
     * Verifies a given domain by its verification_token
     *
     * @return boolean
     */
    public function verify()
    {
        \Log::info('Performing verification for domain:' . $this->domain->domain);

        try {
            if ($this->checkHtmlPage() || $this->checkMetaTag()) {
                \Log::info('Verification for domain ' . $this->domain->domain . ' succeeded');

                return true;
            }
        } catch (TransferException $e) {
            \Log::warning('Validation Exception for domain:' . $this->domain->domain . $e);
            abort(response()->json(['message' => __('siwecos.' . strtoupper(class_basename($e)), ['EXCEPTION' => $e])], 409));
        } catch (\Exception $e) {
            \Log::critical('Unexpected validation Exception for domain:' . $this->domain->domain . $e);
            abort(response()->json(['message' => __('siwecos.EXCEPTION', ['EXCEPTION' => $e])], 409));
        }

        \Log::info('Verification for domain ' . $this->domain->domain . ' failed');

        return false;
    }

    public function checkHtmlPage()
    {
        $response = $this->client->get('http://' . $this->domain->domain . "/" . $this->token->verification_token . ".html");

        if ($response->getStatusCode() === 200) {
            \Log::info('HTML-page validation for domain ' . $this->domain->domain . ' returns a 200');

            \Log::info(
                'HTML-page validation for domain ' . $this->domain->domain
                . ' will compare strings '
                . $this->token->verification_token
                . ' and '
                . trim($response->getBody()->getContents())
            );

            if (Str::is($this->token->verification_token, trim($response->getBody()->getContents()))) {
                \Log::info('HTML-page validation for domain ' . $this->domain->domain . ' succeeded');

                return true;
            }
        }

        \Log::info('HTML-page validation for domain ' . $this->domain->domain . ' failed');

        return false;
    }

    public function checkMetaTag()
    {
        $response = $this->client->get('http://' . $this->domain->domain);

        if ($response->getStatusCode() === 200) {
            \Log::info('Meta-Token validation for domain ' . $this->domain->domain . ' returns a 200');

            $dom = HtmlDomParser::str_get_html($response->getBody()->getContents());
            $tags = $dom->findMultiOrFalse('meta[name="siwecostoken"]');

            if ($tags) {
                \Log::info(
                    'Meta-Token validation for domain '
                    . $this->domain->domain . ' found ' . count($tags) . ' tags'
                );

                foreach ($tags as $tag) {
                    \Log::info(
                        'HTML-page validation for domain ' . $this->domain->domain
                        . ' will compare strings '
                        . $this->token->verification_token
                        . ' and '
                        . $tag->content
                    );

                    if (Str::is($this->domain->token->verification_token, $tag->content)) {
                        \Log::info('Meta-Token validation for domain ' . $this->domain->domain . ' succeeded');

                        return true;
                    }
                }
            }
        }

        \Log::info('Meta-Token validation for domain ' . $this->domain->domain . ' failed');

        return false;
    }
}
