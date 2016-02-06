<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ isset($pageTitle) ? "$pageTitle | " : "" }}{{ $podcast['title'] }}</title>
        <meta name="description" content="{{ $podcast['description'] }}">

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="{{ '@' . env('TWITTER_HANDLE') }}" />
        <meta name="twitter:title" content="{{ $podcast['title'] }}" />
        <meta name="twitter:description" content="{{ $podcast['description'] }}" />
        <meta name="twitter:image" content="{{ env('TWITTER_CARD_IMAGE', $podcast['image']->url) }}" />

        <meta property="og:title" content="{{ $podcast['title'] }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://threeminutegeekshow.com/" />
        <meta property="og:image" content="{{ env('OG_CARD_IMAGE', $podcast['image']->url) }}" />
        <meta property="og:image:width" content="{{ env('OG_IMAGE_WIDTH') }}" />
        <meta property="og:image:height" content="{{ env('OG_IMAGE_HEIGHT') }}" />
        <meta property="og:description" content="{{ $podcast['description'] }}" />

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        <div class="content">
            @include('partials.header', ['podcast' => $podcast])
            
            @yield('content')

            <p class="footer">
                @include('customize.footer', ['podcast' => $podcast])
            </p>
        </div>
        @if (env('GOOGLE_ANALYTICS_ID'))
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', '{{ env('GOOGLE_ANALYTICS_ID') }}', 'auto');
              ga('send', 'pageview');
            </script>
        @endif

        @yield('scripts')
    </body>
</html>
