<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\User\ArtikelController;
use App\Http\Controllers\User\WebinarController;
use App\Http\Controllers\User\PurchaseController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PembayaranController;
use App\Http\Controllers\User\TimeManagementController;

// USER
Route::middleware('isUser')->group(function(){
	Route::group(['prefix' => '/user'], function(){
        Route::get('/dashboard', DashboardController::class);
        Route::get('/my-profile', [SettingController::class, 'index']);
        Route::resource('time-management', TimeManagementController::class);
        Route::resource('webinar', WebinarController::class);
        Route::resource('pembayaran', PembayaranController::class);
        Route::resource('artikel', ArtikelController::class);
        Route::get('/purchase', PurchaseController::class);
    });
});