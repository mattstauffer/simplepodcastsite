<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $podcast['title'] }}</title>
        <meta name="description" content="{{ $podcast['description'] }}">

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@3minutegeekshow" />
        <meta name="twitter:title" content="The Three-Minute Geek Show" />
        <meta name="twitter:description" content="Matt Stauffer, being geeky three minutes at a time." />
        <meta name="twitter:image" content="http://threeminutegeekshow.com/threeminutegeekshowlogo.png" />

        <meta property="og:title" content="The Three-Minute Geek Show" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://threeminutegeekshow.com/" />
        <meta property="og:image" content="http://threeminutegeekshow.com/threeminutegeekshowlogo.png" />
        <meta property="og:image:width" content="594" />
        <meta property="og:image:height" content="594" />
        <meta property="og:description" content="Matt Stauffer, being geeky three minutes at a time." />

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        <div class="content">
            <h1 class="podcast-title">{{ $podcast['title'] }}</h1>
            <a href="{{ $podcast['link'] }}" class="podcast-logo">
                <img src="{{ $podcast['image']->url }}">
            </a>
            @yield('content')

            <p class="footer">
                By <a href="http://twitter.com/stauffermatt">Matt Stauffer</a> | A riff on the <a href="http://fiveminutegeekshow.com/">Five-Minute Geek Show</a> | Powered by <a href="http://briefs.fm/">Briefs.fm</a>
            </p>
        </div>
    </body>
</html>
