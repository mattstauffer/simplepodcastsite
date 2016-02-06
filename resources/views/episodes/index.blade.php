@extends('layouts.app')

@section('content')
    @include('customize.links')

    <h2 class="episodes-title">Episodes</h2>
    <div>
        <ul class="episodes-list">
            @foreach ($episodes as $key => $episode)
            <li class="episode episode--in-list">
                <div class="episode__date">{{ Carbon\Carbon::parse($episode->pubDate)->format('F j, Y H:i') }}</div>
                <a href="/{{ $episodes->count() - $key }}">{{ $episode->title }}</a>
                <p class="episode__description">{{ $episode->description }}</p>

                @if (env('DISQUS_KEY'))
                <a  style="font-size: 0.75em;" href="http://{{ env('DOMAIN') }}/{{ $episodes->count() - $key }}#disqus_thread">(Comments)</a>
                @endif
            </li>
        @endforeach
        </ul>
    </div>

    @include('customize.what-is-this')
@endsection

@section('scripts')
    @if (env('DISQUS_KEY'))
    <script id="dsq-count-scr" src="//threeminutegeekshow.disqus.com/count.js" async></script>
@endif
@endsection
