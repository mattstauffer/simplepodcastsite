@extends('layouts.app')

@section('content')
    <p class="links">
        <a href="itpc://www.briefs.fm/the-three-minute-geek-show.xml">Subscribe in iTunes</a> |
        <a href="overcast://x-callback-url/add?url=https://www.briefs.fm/the-three-minute-geek-show.xml">Subscribe in Overcast</a> |
        <a href="podcast://www.briefs.fm/the-three-minute-geek-show.xml">Subscribe in Podcasts.app</a> | 
        <a href="http://briefs.fm/the-three-minute-geek-show">View in Briefs.fm</a>
    </p>

    <h2 class="episodes-title">Episodes</h2>
    <div>
        <ul class="episodes-list">
        @foreach ($episodes as $key => $episode)
            <li><a href="/{{ $episodes->count() - $key }}">{{ $episode->title }}</a> ({{ Carbon\Carbon::parse($episode->pubDate)->format('F j, Y H:i') }})
</li>
        @endforeach
        </ul>
    </div>

    <div class="what-is-this">
        <h2>What is this?</h2>
        <p>It's an experiment. Unlike the Five-Minute Geek Show, which is a real grown-up podcast with editing and music, this is just off-the-cuff thoughts and updates.</p>
        <p>Take a listen to the episode where I describe what the Three-Minute Geek Show is about.<br>(Can't play the episode? Go to the <a href="http://briefs.fm/the-three-minute-geek-show">Briefs.fm page</a> to get old-browser-friendly players)</p>
        <audio controls preload="metadata" src="https://briefs-production.s3.amazonaws.com/improved_audio/9b322ef3-3742-435d-8acf-ccce5c6a9fe3.mp3">
            <source src="https://briefs-production.s3.amazonaws.com/improved_audio/9b322ef3-3742-435d-8acf-ccce5c6a9fe3.mp3" type="audio/mpeg">
        </audio>
    </div>
@endsection
