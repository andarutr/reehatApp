<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Admin\WebinarController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', 'AuthController@first_page');
Route::get('/auth/login/pengurus', 'AuthController@login_pengurus');
Route::post('/auth/login/pengurus', 'AuthController@login_backend');
Route::get('/auth/login/pengguna', 'AuthController@login_pengguna');
Route::post('/auth/login/pengguna', 'AuthController@login_backend');
Route::get('/auth/register/pengguna', 'AuthController@register_pengguna');
Route::post('/auth/register/pengguna', 'AuthController@register_backend');
Route::get('/auth/logout', 'AuthController@logout');

// ADMIN
Route::middleware('isAdmin')->group(function(){
	Route::group(['prefix' => '/admin'], function(){
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/my-profile', [SettingController::class, 'index']);
        Route::post('/ganti-password', 'AdminController@change_password_backend');
        // WEBINAR
        Route::resource('webinar', WebinarController::class);        
        // ARTIKEL
        Route::get('/artikel', 'AdminController@artikel_list');
        Route::get('/artikel/create', 'AdminController@artikel_create');
        Route::post('/artikel/create', 'AdminController@artikel_create_backend');
        Route::get('/artikel/edit/{id}', 'AdminController@artikel_edit');
        Route::post('/artikel/edit/{id}', 'AdminController@artikel_edit_backend');
        Route::get('/artikel/delete/{id}', 'AdminController@artikel_delete_backend');
        // PEMBAYARAN
        Route::get('/pembayaran', 'AdminController@payment_list');
        Route::get('/pembayaran/delete/{id}', 'AdminController@payment_delete_backend');
    });
});

Route::post('/u/profile', [SettingController::class, 'update_profile']);
Route::post('/u/ganti-password', [SettingController::class, 'update_password']);

// USER
Route::middleware('isUser')->group(function(){
	Route::group(['prefix' => '/user'], function(){
        Route::get('/dashboard', 'UserController@dashboard');
        Route::get('/my-profile', 'UserController@my_profile');

        Route::get('/time-management', 'UserController@time_management');
        Route::get('/time-management/create', 'UserController@time_management_create');
        Route::post('/time-management/create', 'UserController@time_management_create_backend');
        Route::get('/time-management/delete/{id}', 'UserController@time_management_delete');
        Route::get('/time-management/{aplikasi}', 'UserController@time_management_app');
        Route::get('/webinar', 'UserController@webinar_list');
        Route::get('/webinar/{url}', 'UserController@webinar_detail');
        Route::get('/pembayaran', 'UserController@payment');
        Route::get('/pembayaran/{url}', 'UserController@payment_backend');
        Route::get('/detail-webinar', 'UserController@webinar_detail');
        Route::get('/artikel', 'UserController@artikel_list');
        Route::get('/artikel/{url}', 'UserController@artikel_detail');
        Route::get('/purchase', 'UserController@purchase_list');
    });
});
