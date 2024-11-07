<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/product-section', [ProductController::class, 'index'])->name('product.section');
Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');
Route::put('/product-update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product-delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

