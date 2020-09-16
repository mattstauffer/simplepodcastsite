<?php

Route::get('/', 'EpisodeController@index');
Route::get('/episodes/{id}', 'EpisodeController@show');
