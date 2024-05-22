<?php

use App\Models\Barang;
use App\Livewire\ProductList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TrainerController;

// Route::get('/produk/{jenis_barang?}', [ProductController::class, 'index'])->name('produk.index');
// use App\Http\Livewire\ProductList;
// Route::get('/produk', ProductList::class)->name('product.list');

// Route::get('/produk', [ProductController::class, 'index'])->name('product');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/trainer', [TrainerController::class, 'index'])->name('trainer');
Route::get('/produk/{$idbarang}', function (Barang $barangCard) {
    return $barangCard;
});
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
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {});
