<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class,'index'])->name('products.index');
Route::get('products/about', [ProductController::class,'about'])->name('products.about');
Route::get('products/create', [ProductController::class,'create'])->name('products.create');
Route::get('products/{id}/show', [ProductController::class,'show'])->name('products.show');
Route::post('products/store', [ProductController::class,'store'])->name('products.store');
Route::get('products/{id}/edit', [ProductController::class,'edit']);
Route::put('products/{id}/update', [ProductController::class,'update']);
Route::delete('products/{id}/delete', [ProductController::class,'destroy']);
