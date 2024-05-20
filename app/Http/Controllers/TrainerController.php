<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function index()
    {
        $trainer = Barang::all();
        return view('trainer', compact('trainer'));
    }
}
