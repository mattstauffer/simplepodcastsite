<?php

Route::get('/', function () {
    $rss = new \Vinelab\Rss\Rss;
    $feed = $rss->feed(env('RSS_URL'));

    return view('episodes.index')
        ->with('podcast', $feed->info)
        ->with('episodes', $feed->articles);
});

Route::get('{id}', function ($id) {
    $rss = new \Vinelab\Rss\Rss;
    $feed = $rss->feed(env('RSS_URL'));

    $episode = $feed->articles->sortBy(function ($episode, $key) {
        return new \Carbon\Carbon($episode->pubDate);
    })->values()->get($id - 1);

    if ($episode == null) {
        abort(404);
    }
    
    return view('episodes.show')
        ->with('podcast', $feed->info)
        ->with('episode', $episode);
});
