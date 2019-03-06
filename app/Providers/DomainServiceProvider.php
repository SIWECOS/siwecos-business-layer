<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain;

class DomainServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Domain::saving(function ($domain) {
            $domain->url = parse_url($domain->url, PHP_URL_SCHEME) . "://" . parse_url($domain->url, PHP_URL_HOST);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
