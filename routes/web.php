<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProductController;

Route::view('/', 'welcome');

Route::get('chirps', [ChirpController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('chirps');

Route::get('products', [ProductController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('products');

Route::get('products/{id}', [ProductController::class, 'destroy'])
    ->name('products.destroy');

Route::get('product/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
