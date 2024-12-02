<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeasiswaController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa.index');

// Rute untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Rute untuk login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Rute untuk menampilkan form registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Rute untuk registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

