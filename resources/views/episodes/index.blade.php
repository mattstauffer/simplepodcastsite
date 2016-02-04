@extends('layouts.app')

@section('content')
    @include('customize.links')

    <h2 class="episodes-title">Episodes</h2>
    <div>
        <ul class="episodes-list">
            @foreach ($episodes as $key => $episode)
                <li class="episode episode--in-list">
                    <div class="episode__date">{{ Carbon\Carbon::parse($episode['pubDate'])->format('F j, Y H:i') }}</div>
                    <a href="/{{ $episode['sortId'] }}/{{ $episode['slug'] }}">{{ $episode['title'] }}</a>
                    <p class="episode__description">{{ $episode['description'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>

    @include('customize.what-is-this')
@endsection
