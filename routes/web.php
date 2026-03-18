<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/create', [ProductController::class, 'create'])->name('product.create');

Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
