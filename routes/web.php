<?php

use App\Models\Barang;
use App\Livewire\ProductList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FooterController;

Route::get('/', [HomeController::class, 'index'])->name('home');
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
Route::get('/trainer', function () {
    return view('trainer');
})->name('trainer');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {});
