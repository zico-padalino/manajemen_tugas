<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProses'])->name('loginProses');

// Logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['checkLogin','history'])->group(function () {
    // Dashboard route
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // User
    Route::get('user', [UserController::class, 'index'])->name('user');
    // User Creat
    Route::get('user/create', [UserController::class, 'create'])->name('userCreate');
    // Tugas
    Route::get('tugas', [TugasController::class, 'index'])->name('tugas');
});

