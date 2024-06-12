<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index($idbarang)
    {
        $product = DB::table('barang')->where('idbarang', $idbarang)->first();
        if (!$product) {
            abort(404);
        }
        return view('detail', compact('product'));
    }
    public function detail($idbarang)
    {
        $product = DB::table('barang')->where('idbarang', $idbarang)->first();

        if (!$product) {
            abort(404);
        }

        return view('detail', compact('product'));
    }
}
