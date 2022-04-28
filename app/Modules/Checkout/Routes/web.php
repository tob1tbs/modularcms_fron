<?php

// GENERAL ROUTES
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function(){
    Route::group(['prefix' => 'checkout', 'middleware' => []], function () {
        Route::get('/', 'CheckoutController@actionCheckoutIndex')->name('actionCheckoutIndex');
        Route::get('/cart', 'CheckoutController@actionCartIndex')->name('actionCartIndex');
    });
});

// AJAX ROUTES
Route::group(['prefix' => 'checkout/ajax', 'middleware' => []], function () {
    Route::post('/submit', 'CheckoutAjaxController@ajaxCheckoutSubmit')->name('ajaxCheckoutSubmit');
});