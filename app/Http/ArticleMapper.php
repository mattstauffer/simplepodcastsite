<?php
/**
 * Created by PhpStorm.
 * User: jsugar
 * Date: 03/02/2016
 * Time: 22:47
 */

namespace app\Http;

use Carbon\Carbon;
use Vinelab\Rss\Article;

class ArticleMapper
{
    /**
     * @param Article $article
     *
     * @return array
     * @internal param $Article
     *
     */
    public static function map( Article $article )
    {
        return array(
            'sortId'    => ( new Carbon( $article->pubDate ) )->format( 'YmdHis' ),
            'title'       => $article->title,
            'slug'        => str_slug( $article->title ),
            'author'      => $article->author,
            'description' => $article->description,
            'link'        => $article->link,
            'category'    => $article->category,
            'pubDate'     => $article->pubDate,
            'guid'        => $article->guid,
            'enclosure'   => $article->enclosure,
        );
    }
}
