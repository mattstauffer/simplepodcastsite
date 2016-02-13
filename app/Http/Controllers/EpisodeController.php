<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Vinelab\Rss\Feed;

class EpisodeController extends Controller
{
    public function index(Feed $feed)
    {
        return view('episodes.index')
            ->with('podcast', $feed->info())
            ->with('episodes', $feed->articles);
    }

    public function show($id, Feed $feed)
    {
        $episode = $feed->articles->sortBy(function ($episode, $key) {
            return new Carbon($episode->pubDate);
        })->values()->get($id - 1);

        if ($episode == null) {
            abort(404);
        }

        return view('episodes.show')
            ->with('podcast', $feed->info())
            ->with('pageTitle', $episode->title)
            ->with('episode', $episode)
            ->with('episodeCount', $feed->articles->count());
    }
}
