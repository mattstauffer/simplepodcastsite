<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ isset($pageTitle) ? "$pageTitle | " : "" }}{{ $podcast['title'] }}</title>
        <meta name="description" content="{{ $podcast['description'] }}">

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="{{ '@' . config('customize.twitter.handle') }}" />
        <meta name="twitter:title" content="{{ $podcast['title'] }}" />
        <meta name="twitter:description" content="{{ $podcast['description'] }}" />
        <meta name="twitter:image" content="{{ config('customize.twitter.card_image', $podcast['image']->url) }}" />

        <meta property="og:title" content="{{ $podcast['title'] }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://{{ config('customize.domain') }}/" />
        <meta property="og:image" content="{{ config('customize.opengraph.card_image', $podcast['image']->url) }}" />
        <meta property="og:image:width" content="{{ config('customize.opengraph.image_width') }}" />
        <meta property="og:image:height" content="{{ config('customize.opengraph.image_height') }}" />
        <meta property="og:description" content="{{ $podcast['description'] }}" />

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        <style>
            body {
                background: {{ config('customize.background_color') }};
            }
        </style>
    </head>
    <body>
        <div class="content">
            @include('partials.header', ['podcast' => $podcast])

            @yield('content')

            <p class="footer">
                @include('customize.footer', ['podcast' => $podcast])
            </p>
        </div>
        @if (config('customize.google_analytics_id'))
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', '{{ config('customize.google_analytics_id') }}', 'auto');
              ga('send', 'pageview');
            </script>
        @endif

        @yield('scripts')

        @if (session('flash_message'))
            <script src="js/app.js"></script>
            <script>
                swal({
                    title: "{{ session('flash_message.title') }}",
                    text: "{{ session('flash_message.body') }}",
                    timer: 1700,
                    showConfirmButton: false
                });
            </script>
        @endif
    </body>
</html>
