<?php

namespace App\Livewire;

use App\Models\Barang;
use App\Models\Footer;
use App\Models\Katalog;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $katalog = Katalog::get();
        $barangModel = new Barang();
        $barangs = $barangModel->getData();

        return view('livewire.home', [
            'barang' => $barangs,
            'katalog' => $katalog,
        ]);
    }
}
