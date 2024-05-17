<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::resource('products', ProductController::class);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/prodcuts/teste', [ProductController::class, 'store'])->name('products.index');
Route::put('/prodcuts/teste', [ProductController::class, 'edit'])->name('products.edit');
Route::patch('/prodcuts/teste', [ProductController::class, 'update'])->name('products.index');
Route::delete('/prodcuts/teste', [ProductController::class, 'destroy'])->name('products.index');
