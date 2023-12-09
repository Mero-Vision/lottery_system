<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/login/forgot-password', [ForgotPasswordController::class, 'index']);
Route::post('/login/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::get('/reset_password', [ForgotPasswordController::class, 'resetPasswordIndex']);
Route::post('/reset_password', [ForgotPasswordController::class, 'resetPassword']);

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth.session');
    
    
});