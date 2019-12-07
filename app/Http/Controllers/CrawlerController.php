<?php

namespace App\Http\Controllers;

use App\CrawledUrl;
use App\Domain;
use App\Http\Requests\CrawlerFinishedRequest;
use App\MailDomain;
use Illuminate\Support\Facades\Cache;

class CrawlerController extends Controller
{
    public function finished(CrawlerFinishedRequest $request)
    {
        $domain = Domain::whereDomain($request->json('domain'))->firstOrFail();
        $mainUrl = $request->json('urlToScan');
        $crawledUrls = $request->json('crawledUrls');
        $mailServerDomainList = $request->json('mailServerDomainList');

        if ($request->json('hasError') === false && $request->json('httpCouldConnect') === true) {
            $domain->crawledUrls()->update(['domain_id' => null]);
            $domain->mailDomains()->detach();

            $domain->touch();

            if ($mainUrl) {
                $crawledUrl = CrawledUrl::whereUrl($mainUrl)->firstOrCreate(['url' => $mainUrl, 'is_main_url' => true]);
                $crawledUrl->domain()->associate($domain)->save();
            }

            if ($crawledUrls) {
                foreach ($crawledUrls as $url) {
                    $crawledUrl = CrawledUrl::whereUrl($url)->firstOrCreate(['url' => $url]);
                    $crawledUrl->domain()->associate($domain)->save();
                }
            }

            if ($mailServerDomainList) {
                foreach ($mailServerDomainList as $mailServerEntry) {
                    $mailDomain = MailDomain::whereDomain($mailServerEntry)->firstOrCreate(['domain' => $mailServerEntry]);
                    $domain->mailDomains()->syncWithoutDetaching($mailDomain);
                }
            }

            Cache::forget('domain-' . $domain->id . '-couldNotCrawl');
        } else {
            Cache::increment('domain-' . $domain->id . '-couldNotCrawl');
            if (Cache::get('domain-' . $domain->id . '-couldNotCrawl') === 7) {
                $domain->update(['is_verified' => false]);
            }
        }
    }
}
