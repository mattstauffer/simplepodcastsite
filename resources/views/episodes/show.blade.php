@extends('layouts.app')

@section('content')
    <nav class="episode-nav">
        <ul>
            @if (Request::path() != 1)
            <li>
                <a href="/{{ Request::path() - 1 }}">&lt;- Previous episode</a>
            </li>
            @endif
            <li>
                <a href="/">All episodes</a>
            </li>
            @if (Request::path() != $episodeCount)
            <li>
                <a href="/{{ Request::path() + 1 }}">Next episode -&gt;</a>
            </li>
            @endif
        </ul>
    </nav>

    <div>
        <h1>{{ $episode->title }}</h1>
        <p>{{ $episode->description }}</p>
        ({{ Carbon\Carbon::parse($episode->pubDate)->format('F j, Y H:i') }})
        <br><br>

        <audio controls preload="metadata" src="{{ $episode->enclosure['url'] }}">
            <source src="{{ $episode->enclosure['url'] }}" type="audio/mpeg">
        </audio>

        @if (config('customize.disqus_shortname'))
            <h3>Comments</h3>
            <div id="disqus_thread"></div>
            <script>
            var disqus_config = function () {
                this.page.url = "http://{{ config('customize.domain') }}/{{ Request::path() }}";
                this.page.identifier = "{{ $episode->guid }}";
            };
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');

                s.src = '//{{ config('customize.disqus_shortname') }}.disqus.com/embed.js';

                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
        @endif
    </div>
@endsection
