<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LotteryController;
use App\Http\Controllers\LotteryTimeController;
use App\Http\Controllers\UserController;
use App\Models\LotteryTime;
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
    Route::get('/users',[UserController::class,'index']);
    Route::get('/users/data', [UserController::class, 'userDataAjax']);

    Route::get('/lottery/lottery-time',[LotteryTimeController::class,'index']);
    Route::post('/lottery/lottery-time', [LotteryTimeController::class, 'save']);
    Route::get('/lottery/lottery-time/data', [LotteryTimeController::class, 'lotteryTimeDataAjax']);

    Route::get('/lottery/view',[LotteryController::class,'index']);
    
    
});