<?php

// GENERAL ROUTES
Route::group(['prefix' => 'checkout', 'middleware' => []], function () {
    Route::get('/', 'CheckoutController@actionCheckoutIndex')->name('actionCheckoutIndex');
});

// AJAX ROUTES
Route::group(['prefix' => 'checkout/ajax', 'middleware' => []], function () {
    Route::get('/submit', 'CheckoutAjaxController@ajaxCheckoutSubmit')->name('ajaxCheckoutSubmit');
});