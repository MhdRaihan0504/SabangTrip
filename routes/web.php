<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\TiketController;

Route::get('/', [PageController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route ini akan mengarahkan ke halaman register
// url: yang akhiranya adalah /registerPage akan diarahkan ke halaman register
Route::get('/register', [RegisterController::class, 'index']);
 
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/index', [PageController::class, 'welcome']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/discover', [DiscoverController::class, 'index']);
Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth');
Route::get('/etiket', [TiketController::class, 'index'])->middleware('auth');
Route::get('/tiket', [TiketController::class, 'show'])->middleware('auth');
Route::post('/tiket', [TiketController::class, 'store'])->middleware('auth');
Route::get('/payment', [TiketController::class, 'showPayment'])->middleware('auth');
Route::post('/payment', [TiketController::class, 'payment'])->middleware('auth');