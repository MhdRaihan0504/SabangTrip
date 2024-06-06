<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\RatingController;

Route::get('/', [PageController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index']);
 
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/index', [PageController::class, 'welcome'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/discover', [DiscoverController::class, 'index'])->name('discover');
Route::get('/discover/create', [DiscoverController::class, 'create'])->name('discover.create');
Route::post('/discover/create', [DiscoverController::class, 'store'])->name('discover.store');
Route::get('/discover/{id}', [DiscoverController::class, 'show'])->name('discover.show');

Route::get('/testimonial', [RatingController::class, 'index'])->name('testimonial');
Route::get('/testimonial/create', [RatingController::class, 'create'])->name('testimonial.create');
Route::post('/testimonial/create', [RatingController::class, 'store'])->name('testimonial.store');

Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('/etiket', [TiketController::class, 'index'])->middleware('auth')->name('etiket');
Route::get('/tiket', [TiketController::class, 'show'])->middleware('auth')->name('tiket');
Route::post('/tiket', [TiketController::class, 'store'])->middleware('auth')->name('tiket.store');
Route::get('/tiket/request', [TiketController::class, 'tiketRequest'])->middleware('auth')->name('tiket.request');
Route::get('/tiket/request/{id}', [TiketController::class, 'tiketEdit'])->middleware('auth')->name('tiket.edit');
Route::put('/tiket/request/{id}', [TiketController::class, 'tiketUpdate'])->middleware('auth')->name('tiket.update');
Route::get('/payment/{id}', [TiketController::class, 'showPayment'])->middleware('auth')->name('payment');
Route::put('/payment/{id}', [TiketController::class, 'payment'])->middleware('auth')->name('payment.store');
Route::get('/showTicket/{id}', [TiketController::class, 'showTicket'])->middleware('auth')->name('showTicket');