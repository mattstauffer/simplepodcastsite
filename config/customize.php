<?php
return [
    'domain' => env('DOMAIN'),
    'rss_url' => env('RSS_URL'),
    'twitter' => [
        'handle' => env('TWITTER_HANDLE'),
        'card_image' => env('TWITTER_CARD_IMAGE'),
    ],
    'opengraph' => [
        'card_image' => env('OG_CARD_IMAGE'),
        'image_width' => env('OG_IMAGE_WIDTH'),
        'image_height' => env('OG_IMAGE_HEIGHT'),
    ],
    'google_analytics_id' => env('GOOGLE_ANALYTICS_ID'),
    'disqus_shortname' => env('DISQUS_SHORTNAME'),
    'background_color' => env('BACKGROUND_COLOR'),
];

