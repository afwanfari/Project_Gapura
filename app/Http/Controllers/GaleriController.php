<?php

namespace App\Http\Controllers;


use App\Models\Berita;

class GaleriController extends Controller
{
    public function index()
    {
        return view('galery');
    }
}
