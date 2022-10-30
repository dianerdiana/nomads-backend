<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('/', 'HomeController@index')
        ->name('home');
    Route::get('/detail', 'DetailController@index')
        ->name('detail');
});


Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function() {
    // Route::controller(DashboardController::class)
    // ->group(function() {
    //     Route::get('/', 'index')->name('dashboard');
    // });

    Route::get('/', 'DashboardController@index')->name('dashboard')
        ->name('dashboard');
});