<?php

Route::group(['as' => 'authorizer.'], function () {
    Route::get('users/login', ['as' => 'login', 'uses' => 'Winponta\Authorizer\Http\Controllers\UserController@getLogin']);
    Route::post('users/login', ['as' => 'login', 'uses' => 'Winponta\Authorizer\Http\Controllers\UserController@postLogin']);
});