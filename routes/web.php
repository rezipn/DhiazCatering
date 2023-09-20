<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route ::get('/', [App\Http\Controllers\HomeController::class,'index'])
        ->name('home');

Route ::get('/detail/{slug}', [App\Http\Controllers\DetailController::class,'index'])
        ->name('detail');


Route::post('/checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'process'])
        ->name('checkout_process')
        ->middleware(['auth','verified']);

Route::get('/checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'index'])
        ->name('checkout')
        ->middleware(['auth','verified']);

Route::post('/checkout/create/{detail_id}', [App\Http\Controllers\CheckoutController::class, 'create'])
        ->name('checkout-create') 
        ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}', [App\Http\Controllers\CheckoutController::class, 'remove'])
        ->name('checkout-remove')
        ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}', [App\Http\Controllers\CheckoutController::class, 'success'])
        ->name('checkout-success')
        ->middleware(['auth','verified']);

        
        
// Route ::get('/checkout', [App\Http\Controllers\CheckoutController::class,'index'])
//         ->name('checkout');
        
// Route ::get('/checkout/success', [App\Http\Controllers\CheckoutController::class,'success'])
//         ->name('checkout-success');

Route::prefix('admin')
->middleware(['auth','admin'])
->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class,'index'])
        ->name('dashboard');
        Route::resource('travel-package', 'App\Http\Controllers\Admin\TravelPackageController');
        Route::resource('gallery', 'App\Http\Controllers\Admin\GalleryController');
        Route::resource('transaction', 'App\Http\Controllers\Admin\TransactionController');
        Route::resource('gallery', 'App\Http\Controllers\Admin\GalleryController');
        
        // Route::get('/export', [App\Http\Controllers\TransactionController::class, 'export']);
        // Route::post('items.export-pdf', [TransactionController::class, 'viewPDF'])->name('export-pdf');
        
        
});



Auth::routes(['verify' => true]);