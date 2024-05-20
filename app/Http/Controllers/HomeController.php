<?php

namespace App\Http\Controllers;

use App\Models\Barang; // Sesuaikan dengan model Barang Anda

class HomeController extends Controller
{
        public function index()
        {
                $barangModel = new Barang();
                $barangs = $barangModel->getData();
                return view('home', compact('barangs'));
        }
}
