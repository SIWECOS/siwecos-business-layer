<?php

namespace App;

use GuzzleHttp\Client;
use voku\helper\HtmlDomParser;

class DomainVerifier
{
    protected $domain = null;
    protected $client = null;


    public function __construct(Domain $domain, HTTPClient $client = null)
    {
        $this->domain = $domain;
        $this->client = $client ?: new HTTPClient();
    }

    public function verify()
    {
        if ($this->checkHtmlPage() || $this->checkMetaTag()) {
            return true;
        }
        return false;
    }

    public function checkHtmlPage()
    {
        $response = $this->client->get($this->domain->url . "/" . $this->domain->verification_token . ".html");

        if ($response->getStatusCode() === 200) {
            if (str_is($this->domain->verification_token, trim($response->getBody()->getContents()))) {
                return true;
            }
        }

        return false;
    }

    public function checkMetaTag()
    {
        $response = $this->client->get($this->domain->url);

        if ($response->getStatusCode() === 200) {
            $dom = HtmlDomParser::str_get_html($response->getBody()->getContents());
            $tag = $dom->findOne('meta[name="siwecostoken"]');

            if (str_is($this->domain->verification_token, $tag->value)) {
                return true;
            }
        }

        return false;
    }
}
