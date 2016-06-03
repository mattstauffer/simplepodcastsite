<?php

namespace App;

use Carbon\Carbon;
use Vinelab\Rss\ArticlesCollection;
use Vinelab\Rss\Feed;

class RssFeed extends Feed
{
    public $articles;

    public function __construct(Feed $feed)
    {
        $this->info = $feed->info();
        $this->buildArticles($feed->articles);
    }

    public static function fromFeed(Feed $feed)
    {
        return new static($feed);
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
