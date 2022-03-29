<?php

// GENERAL ROUTES
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function(){
    Route::group(['prefix' => 'products', 'middleware' => []], function () {
        Route::get('/{id}', 'ProductsController@actionProductsView')->name('actionProductsView');
        Route::get('/', 'ProductsController@actionProductsIndex')->name('actionProductsIndex');
    });
});

// AJAX ROUTES
Route::group(['prefix' => 'products/ajax', 'middleware' => []], function () {
    
});