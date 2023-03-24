<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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

// Route::get('/', [HomeController::class, 'index'])
////        ->name('home');

// Route::get('/detail', [DetailController::class, 'index'])
////        ->name('detail');

// Route::get('/detail2', [DetailController::class, 'index2'])
////        ->name('detail2');

// Route::get('/detail3', [DetailController::class, 'index3'])
////        ->name('detail3');

// Route::get('/detail4', [DetailController::class, 'index4'])
 //       ->name('detail4');
////
// Route::get('/checkout', [CheckoutController::class, 'index'])
//        ->name('checkout');
////
// Route::get('/checkout2', [CheckoutController::class, 'index2'])
//        ->name('checkout2');
////
// Route::get('/checkout3', [CheckoutController::class, 'index3'])
////        ->name('checkout3');
////
// Route::get('/checkout4', [CheckoutController::class, 'index4'])
//        ->name('checkout4');
////
// Route::get('/checkout/success', [CheckoutController::class, 'success'])
////        ->name('checkout-success');

// Route::prefix('admin')
//        ->namespace('Admin')
//        ->middleware(['auth','admin'])
//        ->group(function(){

//        Route::get('/', [DashboardController::class, 'index'])
//                ->name('dashboard');
                
//        Route::resource ('travel-package', 'App\Http\Controllers\Admin\TravelPackageController');
//        });

// Route::get('/dashboard', [DashboardController::class, 'index'])
//         ->name('dashboard');


// Auth::routes(['verify' => true]);

Route ::get('/', [App\Http\Controllers\HomeController::class,'index'])
        ->name('home');
Route ::get('/detail', [App\Http\Controllers\DetailController::class,'index'])
        ->name('detail');
Route ::get('/checkout', [App\Http\Controllers\CheckoutController::class,'index'])
        ->name('checkout');
Route ::get('/checkout/success', [App\Http\Controllers\CheckoutController::class,'success'])
        ->name('checkout-success');

Route::prefix('admin')
->middleware(['auth','admin'])
->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class,'index'])
        ->name('dashboard');
        Route::resource('travel-package', 'App\Http\Controllers\Admin\TravelPackageController');
        Route::resource('gallery', 'App\Http\Controllers\Admin\GalleryController');
});

Auth::routes(['verify' => true]);