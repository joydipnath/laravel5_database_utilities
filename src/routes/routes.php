<?php


Route::group(['namespace' => 'Joydip\Laravel5_database_utilities\Controllers'], function() {
    // Your route goes here
    Route::get('database-manager', 'DatabaseController@home');
    Route::get('get_dump', 'DatabaseController@getDump')->name('get_dump');
});
