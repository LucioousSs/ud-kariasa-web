<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Landing page tunggal dengan anchor smooth scroll
Route::get('/', [PageController::class, 'home'])->name('home');

// Redundant redirect menuju section agar path lama tetap ramah
Route::redirect('/tentang-kami', '/#about')->name('about');
Route::redirect('/katalog', '/#catalog')->name('catalog');
Route::redirect('/lokasi', '/#location')->name('location');
Route::redirect('/kontak', '/#location')->name('contact');

// Panel admin (login publik hanya menampilkan form, sisanya dibatasi middleware auth)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    Route::middleware('auth')->group(function () {
        Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/products', [ProductController::class, 'store'])->name('products.store');
        Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    });
});
