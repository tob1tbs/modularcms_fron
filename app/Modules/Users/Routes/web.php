<?php

// GENERAL ROUTES
Route::group(['prefix' => 'users', 'middleware' => []], function () {
    Route::get('/login', 'UsersController@actionUsersLogin')->name('actionUsersLogin');
    Route::get('/registration', 'UsersController@actionUsersRegistration')->name('actionUsersRegistration');
    Route::get('/restore', 'UsersController@actionUsersRestore')->name('actionUsersRestore');
    Route::get('/view/', 'UsersController@actionUsersView')->name('actionUsersView');
    Route::get('/orders/{user_id}', 'UsersController@actionUsersOrders')->name('actionUsersOrders');
});

// AJAX ROUTES
Route::group(['prefix' => 'users/ajax', 'middleware' => []], function () {
    Route::post('/login', 'UsersAjaxController@ajaxUsersLogin')->name('ajaxUsersLogin'); 
});