<?php

// GENERAL ROUTES
Route::group(['prefix' => 'users', 'middleware' => []], function () {
    Route::get('/view/{user_id}', 'UsersController@actionUsersView')->name('actionUsersView');
    Route::get('/orders/{user_id}', 'UsersController@actionUsersOrders')->name('actionUsersOrders');
});

// AJAX ROUTES
Route::group(['prefix' => 'users/ajax', 'middleware' => []], function () {
    
});