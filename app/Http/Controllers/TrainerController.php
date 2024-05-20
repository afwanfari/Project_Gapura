<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class TrainerController extends Controller
{
    public function index()
    {
        $trainer = DB::table('barangs')
            ->join('jenis_barangs', 'barangs.jenis_barang', '=', 'jenis_barangs.id')
            ->select('barangs.*', 'jenis_barangs.jenis as jenis_barang')
            ->get();
        return view('trainer', compact('trainer'));
    }
}
