<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/produk/{idbarang}', [ProdukController::class, 'index'])->name('product.detail');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/galery', function () {
    return view('galery');
})->name('galery');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/produk', function () {
    return view('produk');
})->name('produk');
Route::get('/trainer', function () {
    return view('trainer');
})->name('trainer');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
});
