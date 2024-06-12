<?php

namespace App\Livewire;

use App\Models\Barang;
use Livewire\Component;

class ProdukLengkap extends Component
{
    public $search = '';

    public function render()
    {
        $trainers = Barang::query()
            ->when($this->search, function ($query) {
                $query->where('nama', 'like', '%' . $this->search . '%')->orWhere('jenis_barang', 'like', '%' . $this->search . '%');
            })
            ->get();

        return view('livewire.Produk-Lengkap', ['trainers' => $trainers]);
    }
}
