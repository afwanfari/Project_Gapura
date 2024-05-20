<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class HomeController extends Controller
{
        public function index()
        {
                $barangModel = new Barang();
                $barangs = $barangModel->getData();
                return view('home', compact('barangs'));
        }
}
