<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['prefix' => '/', 'namespace' => 'App\Http\Controllers'], function () {

  Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
  });

  Route::controller(DetailController::class)->group(function () {
    Route::get('/detail/{slug}', 'index')->name('detail');
  });

  Route::controller(CheckoutController::class)
    ->middleware(['auth'])
    ->prefix('checkout')
    ->group(function () {
      Route::get('/{id}', 'index')->name('checkout');
      Route::post('/{id}', 'process')->name('checkout-process');
      Route::post('/create/{detail_id}', 'create')->name('checkout-create');
      Route::get('/remove/{detail_id}', 'remove')->name('checkout-remove');
      Route::get('/confirm/{id}', 'success')->name('checkout-success');
    });
});


Route::group([
  'prefix' => 'admin',
  'namespace' => 'App\Http\Controllers',
  'middleware' => ['auth', 'admin']
], function () {

  Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard');
  });
  Route::resource('travel-package', TravelPackageController::class);
  Route::resource('gallery', GalleryController::class);
  Route::resource('transaction', TransactionController::class);
});

Auth::routes(['verify' => true]);
