<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain;

class CrawlerController extends Controller
{
    public function finished(Request $request)
    {
        $domain = Domain::whereDomain($request->json('result.domain'))->firstOrFail();

        $domain->update(['urls' => $request->json('result.urls')]);
    }
}
