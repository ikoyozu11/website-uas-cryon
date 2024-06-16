<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\guest\BerandaController;
use App\Http\Controllers\user\HomeUserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Guest
Route::get('/', [BerandaController::class, 'index']);

// Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

// User
Route::middleware(['auth', 'role:User'])->group(function () {
    Route::get('/home', [HomeUserController::class, 'index']);
});

// Admin
Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});