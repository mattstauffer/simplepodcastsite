<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>The Three-Minute Geek Show</title>

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
                padding: 3em 1em;
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
                font-size: 2em;
            }

            .links {
                font-size: 1.5em;
            }

            .links a {
                color: red;
            }

            .footer {
                margin-top: 4em;
            }

            @media only screen and (min-width: 500px) {
                .title {
                    font-size: 6em;
                }

                .links {
                    font-size: 2em;
                }

                .footer {
                    margin-top: 8em;
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
                <p class="footer">
                    By <a href="http://twitter.com/stauffermatt">Matt Stauffer</a> | A riff on the <a href="http://fiveminutegeekshow.com/">Five-Minute Geek Show</a> | Powered by <a href="http://briefs.fm/">Briefs.fm</a>
                </p>
            </div>
        </div>
    </body>
</html>
