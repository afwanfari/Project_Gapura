<?php

namespace App\Livewire;

use App\Models\Barang;
use Livewire\Component;
use Dotenv\Util\Str; 

class Home extends Component
{
    public function render()
    {
        $barangs = Barang::all(); // Ganti dengan logika pengambilan data sesuai kebutuhan

        return view('livewire.home', [
            'barangs' => $barangs,
        ]);
    }
}
