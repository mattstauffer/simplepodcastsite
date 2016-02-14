<?php

Route::group(['middleware' => 'web'], function() {
	Route::get('/', 'EpisodeController@index');
	Route::get('{id}', 'EpisodeController@show');
});
