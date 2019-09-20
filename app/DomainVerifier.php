<?php

namespace App;

use voku\helper\HtmlDomParser;
use Illuminate\Support\Str;
use GuzzleHttp\Exception\TransferException;

class DomainVerifier
{
    protected $domain = null;
    protected $client = null;


    public function __construct(Domain $domain, HTTPClient $client = null)
    {
        $this->domain = $domain;
        $this->client = $client ?: new HTTPClient();
    }

    /**
     * Verifies a given domain by its verification_token
     *
     * @return boolean
     */
    public function verify()
    {
        try {
            if ($this->checkHtmlPage() || $this->checkMetaTag()) {
                return true;
            }
        } catch (TransferException $e) {
            \Log::warning('Validation Exception for domain:' . $this->domain->domain . PHP_EOL . $e);
            abort(response()->json(['message' => __('siwecos.' . strtoupper(class_basename($e)), ['EXCEPTION' => $e])], 409));
        } catch (\Exception $e) {
            \Log::critical('Unexpected validation Exception for domain:' . $this->domain->domain . PHP_EOL . $e);
            abort(response()->json(['message' => __('siwecos.EXCEPTION', ['EXCEPTION' => $e])], 409));
        }

        return false;
    }

    public function checkHtmlPage()
    {
        $response = $this->client->get('http://' . $this->domain->domain . "/" . $this->domain->verification_token . ".html");

        if ($response->getStatusCode() === 200) {
            if (Str::is($this->domain->verification_token, trim($response->getBody()->getContents()))) {
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
            $tag = $dom->findOne('meta[name="siwecostoken"]');

            if (Str::is($this->domain->verification_token, $tag->content)) {
                return true;
            }
        }

        return false;
    }
}
