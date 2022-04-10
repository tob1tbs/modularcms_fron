<?php

// GENERAL ROUTES
Route::group(['prefix' => 'constructor', 'middleware' => []], function () {
    Route::get('/', 'ConstructorController@actionConstructorIndex')->name('actionConstructorIndex');
});

// AJAX ROUTES
Route::group(['prefix' => 'constructors/ajax', 'middleware' => []], function () {
    
});