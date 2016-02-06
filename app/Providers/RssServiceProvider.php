<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Vinelab\Rss\Feed;
use Vinelab\Rss\Rss;

class RssServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton(Feed::class, function ($app) {
            // @todo: Figure out how to cache without running into the simple xml issue
//            return app('cache')->remember('feed', $minutes = 1, function () {
                return (new Rss)->feed(config('customize.rss_url'));
//            });
        });
    }
}
