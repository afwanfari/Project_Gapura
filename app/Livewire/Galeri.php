<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class Galeri extends Component
{
    use WithPagination;
    use WithoutUrlPagination;
    public function render()
    {
        return view('livewire.galeri', [
            'berita' => Berita::paginate(24)->fragment('Galeri-Kami'),
        ]);
    }
}
