<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index($idbarang)
    {
        // Lakukan query untuk mendapatkan data barang berdasarkan kode_barang
        $product = DB::table('barang')->where('idbarang', $idbarang)->first();

        // Periksa apakah produk ditemukan atau tidak
        if (!$product) {
            abort(404); // Atau lakukan tindakan lain sesuai kebutuhan Anda
        }
        return view('detail', compact('product'));
    }
}
