<?php

// GENERAL ROUTES
Route::group(['prefix' => 'main', 'middleware' => []], function () {
    Route::get('/', 'MainController@actionMainIndex')->name('actionMainIndex');
    Route::get('/about', 'MainController@actionMainAbout')->name('actionMainAbout');
    Route::get('/contact', 'MainController@actionMainContact')->name('actionMainContact');
});

// AJAX ROUTES
Route::group(['prefix' => 'main/ajax', 'middleware' => []], function () {
    
});