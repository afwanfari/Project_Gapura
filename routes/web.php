<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/produk/{idbarang}', [ProdukController::class, 'detail'])->name('produk.detail');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/galery', function () {
    return view('galery');
})->name('galery');
Route::get('/produk', function () {
    return view('produk');
})->name('produk');
Route::get('/Daftar-Produk', function () {
    return view('ProdukLengkap');
})->name('trainer');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
});
