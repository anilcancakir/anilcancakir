<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Common routes...
Route::get('/', 'CommonController@showHome')->name('common.home');
Route::get('tos', 'CommonController@showTos')->name('common.tos');

// Series routes...
Route::group(['prefix' => 'series'], function () {
    Route::get('/', 'SeriesController@index')->name('series.index');
    Route::get('{series}', 'SeriesController@show')->name('series.show');
    Route::get('{series}/episodes/{episode}', 'EpisodeController@show')->name('episode.show');
});


// Auth routes...
Route::group(['prefix' => 'auth'], function () {
    // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout')->name('auth.logout');
});

// Admin routes...
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    // Dashboard routes..
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard.index');
    });
});