<?php

use App\Http\ArticleMapper;
use Carbon\Carbon;

Route::get( '/', function () {
    $rss  = new \Vinelab\Rss\Rss;
    $feed = $rss->feed( env( 'RSS_URL' ) );

    $episodes = $feed->articles->map( function ( $article, $key ) {
        return ArticleMapper::map($article);
    } )->sortByDesc( 'sortDate' );

    return view( 'episodes.index' )
        ->with( 'podcast', $feed->info() )
        ->with( 'episodes', $episodes );
} );

Route::get( '/{id}/{title}', function ( $id )  {
    $rss  = new \Vinelab\Rss\Rss;
    $feed = $rss->feed( env( 'RSS_URL' ) );

    $episode = $feed->articles->map( function ( $article, $key ) {
        return ArticleMapper::map($article);
    } )->where('sortId', $id)->first();

    if ($episode == null) {
        abort(404);
    }

    return view( 'episodes.show' )
        ->with( 'podcast', $feed->info() )
        ->with( 'episode', $episode );
} );
