@extends('layouts.app')

@section('content')
    <a href="/" class="back-to-index">&lt;- All episodes</a>
        
    <div>
        <h1>{{ $episode->title }}</h1>
        <p>{{ $episode->description }}</p>
        ({{ Carbon\Carbon::parse($episode->pubDate)->format('F j, Y H:i') }})
        <br><br>

        <audio controls preload="metadata" src="{{ $episode->guid }}">
            <source src="{{ $episode->guid }}" type="audio/mpeg">
        </audio>

        @if (env('DISQUS_KEY'))
            <h3>Comments</h3>
            <div id="disqus_thread"></div>
            <script>
            var disqus_config = function () {
                this.page.url = "{{ Request::url() }}";
                this.page.identifier = "{{ $episode->guid }}";
            };
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');

                s.src = '//{{ env('DISQUS_KEY') }}.disqus.com/embed.js';

                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
        @endif
    </div>
@endsection
