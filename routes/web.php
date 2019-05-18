<?php

// 后台认证
Route::get('authentication/login', 'AuthenticationController@showLoginForm')->name('authentication.login.page');
Route::post('authentication/login', 'AuthenticationController@login')->name('authentication.login');
Route::post('authentication/logout', 'AuthenticationController@logout')->name('authentication.logout');


// 后台管理
Route::middleware(['auth.backstage'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
});