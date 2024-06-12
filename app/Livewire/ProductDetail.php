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
        $this->product = DB::table('barang')
            ->where('idbarang', $this->productId)
            ->first();
        if (!$this->product) {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
