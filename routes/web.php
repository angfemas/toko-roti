<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

Route::resource('products', ProductController::class);


Route::get('/', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');



Route::get('/about', [PageController::class, 'about'])->name('about');






Route::get('/', function () {
    return view('welcome');
});