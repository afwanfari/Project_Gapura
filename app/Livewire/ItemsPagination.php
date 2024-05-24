<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class ItemsPagination extends Component
{
    use WithPagination;
    use WithoutUrlPagination;

    public function render()
    {
        return view('livewire.items-pagination', [
            'berita' => Berita::paginate(20)->fragment('Galeri-Kami')
        ]);
    }
}
