<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FooterController;
use App\Models\Barang;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/trainer', [TrainerController::class, 'index'])->name('trainer');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/produk/{$idbarang}', function (Barang $barangCard) {
    return $barangCard;
});
// Route untuk halaman about
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/galery', function () {
    return view('galery');
})->name('galery');



Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route untuk halaman about yang memerlukan autentikasi
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
});
