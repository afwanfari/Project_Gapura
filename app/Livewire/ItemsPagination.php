<?php

namespace App\Livewire;

use App\Models\Berita;
use Dotenv\Util\Str; 
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class ItemsPagination extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function render()
    {
        return view('livewire.items-pagination', [
            'berita' => Berita::paginate(10)
        ]);
    }
}
