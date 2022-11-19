<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;

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

Route::group(['prefix' => '/'], function() {
  Route::get('/', [HomeController::class, 'index'])
    ->name('home');
  Route::get('detail', [DetailController::class, 'index'])
    ->name('detail');
  
  Route::controller(CheckoutController::class)
    ->group(function() {
      Route::get('checkout', 'index')->name('checkout');
      Route::get('checkout/success', 'success')->name('checkout-success');
    });
});


Route::group([
  'prefix' => 'admin',
  'middleware' => ['auth', 'admin'],
  ], function() {
    
  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
  Route::resource('travel-package', TravelPackageController::class);
  Route::resource('gallery', GalleryController::class);
  Route::resource('transaction', TransactionController::class);
});
Auth::routes(['verify' => true]);
