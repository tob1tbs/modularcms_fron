<?php

// GENERAL ROUTES
Route::group(['prefix' => 'products', 'middleware' => []], function () {
    Route::get('/', 'ProductsController@actionProductsIndex')->name('actionProductsIndex');
    Route::get('/view/{slug}', 'ProductsController@actionProductsView')->name('actionProductsView');
});

// AJAX ROUTES
Route::group(['prefix' => 'products/ajax', 'middleware' => []], function () {
    
});