<?php

namespace App\Http\Controllers;

use App\CrawledUrl;
use App\Domain;
use App\Http\Requests\CrawlerFinishedRequest;
use App\MailDomain;

class CrawlerController extends Controller
{
    public function finished(CrawlerFinishedRequest $request)
    {
        $domain = Domain::whereDomain($request->json('domain'))->firstOrFail();
        $crawledUrls = $request->json('crawledUrls');
        $mailServerDomainList = $request->json('mailServerDomainList');

        $domain->crawledUrls()->update(['domain_id' => null]);
        $domain->mailDomains()->detach();

        if ($crawledUrls) {
            foreach ($crawledUrls as $url) {
                $crawledUrl = CrawledUrl::whereUrl($url)->firstOrCreate(['url' => $url]);
                $crawledUrl->domain()->associate($domain)->save();
            }
        }

        if ($mailServerDomainList) {
            foreach ($mailServerDomainList as $mailServerEntry) {
                $mailDomain = MailDomain::whereDomain($mailServerEntry)->firstOrCreate(['domain' => $mailServerEntry]);
                $domain->mailDomains()->attach($mailDomain);
            }
        }
    }
}
