<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RssFeed;
use Carbon\Carbon;

class EpisodeController extends Controller
{
    public function index(RssFeed $feed)
    {
        return view('episodes.index')
            ->with('podcast', $feed->info())
            ->with('episodes', $feed->articles->reverse());
    }

    public function show($id, RssFeed $feed)
    {
        $episode = $feed->articles->get($id);

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
