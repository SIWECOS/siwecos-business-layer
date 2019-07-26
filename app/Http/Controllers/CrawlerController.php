<?php

namespace App\Http\Controllers;

use App\Domain;
use App\Http\Requests\CrawlerFinishedRequest;

class CrawlerController extends Controller
{
    public function finished(CrawlerFinishedRequest $request)
    {
        $domain = Domain::whereDomain($request->json('domain'))->firstOrFail();
        $crawledUrls = $request->json('crawledUrls');
        $mailDomains = $request->json('mailServerDomainList');

        if ($crawledUrls) {
            foreach ($crawledUrls as $url) {
                $domain->crawledUrls()->firstOrCreate(['url' => $url]);
            }
        }

        if ($mailDomains) {
            foreach ($mailDomains as $mailDomain) {
                $domain->mailDomains()->firstOrCreate(['domain' => $mailDomain]);
            }
        }
    }
}
