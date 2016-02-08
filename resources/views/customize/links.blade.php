    <p class="links">
        Subscribe: 
        <a href="itpc://{{ substr(env('RSS_URL'), 8) }}">iTunes</a> |
        <a href="overcast://x-callback-url/add?url={{ env('RSS_URL') }}">Overcast</a> |
        <a href="podcast://{{ substr(env('RSS_URL'), 8) }}">Podcasts.app</a> | 
        <a href="{{ env('RSS_URL') }}">RSS</a> | 
        <a href="http://{{ substr(env('RSS_URL'), 8, -4) }}">View in Briefs.fm</a>
    </p>

