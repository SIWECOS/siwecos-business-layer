<?php

namespace App\Http\Controllers;

use App\Domain;
use App\Http\Requests\CrawlerFinishedRequest;

class CrawlerController extends Controller
{
    public function finished(CrawlerFinishedRequest $request)
    {
        $domain = Domain::whereDomain($request->json('result.domain'))->firstOrFail();

        $domain->update(['urls' => $request->json('result.urls')]);
    }
}
