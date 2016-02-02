<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>The Three-Minute Geek Show</title>
        <meta name="description" content="Matt Stauffer, being geeky three minutes at a time.">

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

        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

        <style>
            /* apply a natural box layout model to all elements, but allowing components to change */
            html {
                box-sizing: border-box;
            }
            *, *:before, *:after {
                box-sizing: inherit;
            }
            html, body {
                background: #cee7d8;
                font-family: 'Roboto', sans-serif;
                height: 100%;
            }

            img {
                max-width: 100%;
            }

            body {
                display: table;
                font-weight: 100;
                margin: 0;
                padding: 1em;
                width: 100%;
            }

            .container {
                display: table-cell;
                text-align: center;
                vertical-align: middle;
            }

            .content {
                display: inline-block;
                text-align: center;
            }

            .title {
                display: none;
            }

            .links {
                font-size: 1.5em;
            }

            .links a {
                color: red;
            }

            .what-is-this {
                margin-top: 5em;
            }

            .footer {
                margin-top: 4em;
            }

            @media only screen and (min-width: 500px) {
                .title {
                    display: block;
                    font-size: 6em;
                    margin-top: 1em;
                }

                .links {
                    font-size: 2em;
                }

                .footer {
                    margin-top: 6em;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">The Three-Minute Geek Show</div>
                <a href="https://www.briefs.fm/the-three-minute-geek-show">
                    <img src="threeminutegeekshowlogo.png">
                </a>
                <p class="links">
                    <a href="itpc://www.briefs.fm/the-three-minute-geek-show.xml">Subscribe in iTunes</a> |
                    <a href="overcast://x-callback-url/add?url=https://www.briefs.fm/the-three-minute-geek-show.xml">Subscribe in Overcast</a> |
                    <a href="podcast://www.briefs.fm/the-three-minute-geek-show.xml">Subscribe in Podcasts.app</a>
                </p>
                <p class="links">
                    <a href="https://www.briefs.fm/the-three-minute-geek-show">View episodes</a>
                </p>
                <p class="what-is-this">
                    <h2>What is this?</h2>
                    <p>It's an experiment. Unlike the Five-Minute Geek Show, which is a real grown-up podcast with editing and music, this is just off-the-cuff thoughts and updates.</p>
                    <p>Take a listen to the episode where I describe what the Three-Minute Geek Show is about.<br>(Can't play the episode? Go to the <a href="http://briefs.fm/the-three-minute-geek-show">Briefs.fm page</a> to get old-browser-friendly players)</p>
                    <audio controls preload="metadata" src="https://briefs-production.s3.amazonaws.com/improved_audio/9b322ef3-3742-435d-8acf-ccce5c6a9fe3.mp3">
                        <source src="https://briefs-production.s3.amazonaws.com/improved_audio/9b322ef3-3742-435d-8acf-ccce5c6a9fe3.mp3" type="audio/mpeg">
                    </audio>
                </p>
                <p class="footer">
                    By <a href="http://twitter.com/stauffermatt">Matt Stauffer</a> | A riff on the <a href="http://fiveminutegeekshow.com/">Five-Minute Geek Show</a> | Powered by <a href="http://briefs.fm/">Briefs.fm</a>
                </p>
            </div>
        </div>
    </body>
</html>
