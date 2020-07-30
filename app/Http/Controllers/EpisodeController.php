<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\RssFeed;

class EpisodeController extends Controller
{
    public function index(RssFeed $feed)
    {
        return view('episodes.index', [
            'podcast' => $feed->info(),
            'episodes' => $feed->articles->reverse(),
        ]);
    }

    public function show($id, RssFeed $feed)
    {
        $episode = $feed->articles->get($id);

        if ($episode == null) {
            abort(404);
        }

        return view('episodes.show', [
            'podcast' => $feed->info(),
            'pageTitle' => $episode->title,
            'episode' => $episode,
            'episodeCount' => $feed->articles->count(),
        ]);
    }
}
