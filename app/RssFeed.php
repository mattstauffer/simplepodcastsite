<?php

namespace App;

use Carbon\Carbon;
use Vinelab\Rss\ArticlesCollection;
use Vinelab\Rss\Feeds\RSSFeed as VineRSSFeed;
use Vinelab\Rss\Rss;

class RssFeed extends VineRSSFeed
{
    public $articles;

    public function __construct(Rss $rss)
    {
        $feed = $rss->feed(config('customize.rss_url'));
        $this->info = $feed->info();
        $this->buildArticles($feed->articles);
    }

    /**
     * Build the Articles with the IDs correctly set.
     *
     * The returned value is kept in Ascending Order.
     */
    public function buildArticles(ArticlesCollection $articles)
    {
        $this->articles = $articles
            ->sortBy(function ($episode) {
                return new Carbon($episode->pubDate);
            })
            ->values()
            ->each(function ($item, $key) {
                $item->id = $key +1;
            })
            ->keyBy('id');
    }
}
