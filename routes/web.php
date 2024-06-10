<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);

use App\Http\Controllers\PDFController;

Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('products.pdf');
Route::get('/Exports/ProductsExport', [ProductController::class, 'export'])->name('products.export');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware('auth');
