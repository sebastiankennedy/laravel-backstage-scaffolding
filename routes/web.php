<?php

Route::domain('backstage.laravel.local')->namespace('Backstage')->name('backstage.')->group(function () {
    // 后台首页
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
});