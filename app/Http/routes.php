<?php

Route::get('/', 'EpisodeController@index');
Route::get('{id}', 'EpisodeController@show');
