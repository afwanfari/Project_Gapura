<?php

namespace App\Livewire;

use App\Models\Barang;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {

        $barangModel = new Barang();
        $barangs = $barangModel->getData();

        return view('livewire.home', [
            'barang' => $barangs,
        ]);
    }
}
