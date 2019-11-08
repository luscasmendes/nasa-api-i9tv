<?php


Route::get('/asteroids', 'AsteroidsController@getAsteroids')->middleware('cors');
