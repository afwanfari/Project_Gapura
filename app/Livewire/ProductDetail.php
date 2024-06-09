<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ProductDetail extends Component
{
    public $productId;
    public $product;

    public function mount($idbarang)
    {
        $this->productId = $idbarang;
        // Lakukan query untuk mendapatkan data barang berdasarkan idbarang
        $this->product = DB::table('barang')->where('idbarang', $this->productId)->first();

        // Periksa apakah produk ditemukan atau tidak
        if (!$this->product) {
            abort(404); // Atau lakukan tindakan lain sesuai kebutuhan Anda
        }
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
