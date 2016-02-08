<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ConfigurableSubscribeUrlsTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function subscribe_urls_should_be_configurable()
    {
        $this->visit('/')
             ->see('itpc://www.briefs.fm/the-three-minute-geek-show.xml')
             ->see('overcast://x-callback-url/add?url=https://www.briefs.fm/the-three-minute-geek-show.xml')
             ->see('podcast://www.briefs.fm/the-three-minute-geek-show.xml')
             ->see('https://www.briefs.fm/the-three-minute-geek-show.xml')
             ->see('http://briefs.fm/the-three-minute-geek-show');
    }
}
