<?php

Route::post('statuses', 'StatusesController@store')->name('statuses.store')->middleware('auth');


Route::auth();
