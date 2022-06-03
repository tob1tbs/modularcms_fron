<?php

// GENERAL ROUTES
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function(){
    Route::group(['prefix' => '/', 'middleware' => []], function () {
        Route::get('/', 'MainController@actionMainIndex')->name('actionMainIndex');
        Route::get('/about', 'MainController@actionMainAbout')->name('actionMainAbout');
        Route::get('/privacy', 'MainController@actionMainPrivacy')->name('actionMainPrivacy');
        Route::get('/contact', 'MainController@actionMainContact')->name('actionMainContact');
    });
});

// AJAX ROUTES
Route::group(['prefix' => 'main/ajax', 'middleware' => []], function () {
    Route::post('/cart/add', 'MainAjaxController@ajaxGeneralAddToCart')->name('ajaxGeneralAddToCart');
    Route::post('/cart/remove', 'MainAjaxController@ajaxGeneralRemoveFromCart')->name('ajaxGeneralRemoveFromCart');
    Route::post('/cart/quanitity', 'MainAjaxController@ajaxGeneralQuantityCart')->name('ajaxGeneralQuantityCart');
    Route::post('/cart/clear', 'MainAjaxController@ajaxGeneralClearCart')->name('ajaxGeneralClearCart');
});