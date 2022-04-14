<?php

// GENERAL ROUTES
Route::group(['prefix' => 'generals', 'middleware' => []], function () {
    Route::get('/', 'GeneralController@actionGeneralIndex')->name('actionGeneralIndex');
});

// AJAX ROUTES
Route::group(['prefix' => 'generals/ajax', 'middleware' => []], function () {
    
});