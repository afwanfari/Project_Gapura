<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\JenisBarang;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $barang = Barang::paginate(10);
        return view('produk', compact('barang'));
    }
}
