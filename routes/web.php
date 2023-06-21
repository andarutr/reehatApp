<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingController;

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

Route::get('/', [AuthController::class, 'first_page']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'proses_login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'proses_register']);
Route::get('/logout', [AuthController::class , 'destroy']);

Route::post('/u/profile', [SettingController::class, 'update_profile']);
Route::post('/u/ganti-password', [SettingController::class, 'update_password']);

require __DIR__.'/admin.php';

require __DIR__.'/user.php';
