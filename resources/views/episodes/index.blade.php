@extends('layouts.app')

@section('content')
    @include('customize.links')

    <h2 class="episodes-title">Episodes</h2>
    <div>
        <ul class="episodes-list">
            @foreach ($episodes as $episode)
                <li class="episode episode--in-list">
                    <div class="episode__date">{{ Carbon\Carbon::parse($episode->pubDate)->format('F j, Y H:i') }}</div>
                    <a href="/episodes/{{ $episode->id }}">{{ $episode->title }}</a>
                    <p class="episode__description">{{ $episode->description }}</p>

                    @if (config('customize.disqus_shortname'))
                        <a style="font-size: 0.75em;" href="//{{ config('customize.domain') }}/{{ $episode->id }}#disqus_thread">0 Comments</a>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endsection

@section('scripts')
    @if (config('customize.disqus_shortname'))
    <script id="dsq-count-scr" src="//{{ config('customize.disqus_shortname') }}.disqus.com/count.js" async></script>
    @endif
@endsection
