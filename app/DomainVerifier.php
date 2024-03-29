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
        try {
            if ($this->checkDnsRecord()
                || $this->checkResponseHeaders()
                || $this->checkHtmlPage()
                || $this->checkMetaTag()
            ) {
                return true;
            }
        } catch (TransferException $e) {
            \Log::warning('Validation Exception for domain:' . $this->domain->domain . $e);
            abort(response()->json(['message' => __('siwecos.' . strtoupper(class_basename($e)), ['EXCEPTION' => $e])], 409));
        } catch (\Exception $e) {
            \Log::critical('Unexpected validation Exception for domain:' . $this->domain->domain . $e);
            abort(response()->json(['message' => __('siwecos.EXCEPTION', ['EXCEPTION' => $e])], 409));
        }

        return false;
    }

    public function checkHtmlPage()
    {
        $response = $this->client->get('http://' . $this->domain->domain . "/" . $this->token->verification_token . ".html");

        if ($response->getStatusCode() === 200) {
            if (Str::is($this->token->verification_token, trim($response->getBody()->getContents()))) {
                return true;
            }
        }

        return false;
    }

    public function checkMetaTag()
    {
        $response = $this->client->get('http://' . $this->domain->domain);

        if ($response->getStatusCode() === 200) {
            $dom = HtmlDomParser::str_get_html($response->getBody()->getContents());
            $tags = $dom->findMultiOrFalse('meta[name="siwecostoken"]');

            if ($tags) {
                foreach ($tags as $tag) {
                    if (Str::is($this->token->verification_token, $tag->content)) {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    public function checkDnsRecord()
    {
        $records = dns_get_record($this->domain->domain,  DNS_TXT);

        if ($records) {
            foreach ($records as $record) {
                if (isset($record['txt'])
                    && strpos($record['txt'], 'siwecostoken=') === 0
                ) {
                    $token = explode('=', $record['txt'])[1];
                    if (Str::is($this->token->verification_token, $token)) {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    public function checkResponseHeaders()
    {
        $response = $this->client->head('http://' . $this->domain->domain);

        if ($response->getStatusCode() === 200) {
            $headers = $response->getHeader('siwecostoken');

            foreach ($headers as $token) {
                if (Str::is($this->token->verification_token, $token)) {
                    return true;
                }
            }
        }

        return false;
    }
}
