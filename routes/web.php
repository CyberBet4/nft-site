<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CollectionController;

// Routes below

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::post('/register', [RegisterController::class, 'register'])->name('signup');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/login', [LoginController::class, 'index'])->name('login');

Route::get('/collection', [CollectionController::class, 'index'])->name('collection');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');