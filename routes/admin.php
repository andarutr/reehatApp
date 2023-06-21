<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\WebinarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PembayaranController;

// Admin
Route::middleware('isAdmin')->group(function(){
	Route::group(['prefix' => '/admin'], function(){
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/my-profile', [SettingController::class, 'index']);
        Route::resource('webinar', WebinarController::class);        
        Route::resource('artikel', ArtikelController::class);        
        Route::resource('pembayaran', PembayaranController::class);
    });
});