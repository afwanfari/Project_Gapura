<?php

namespace App\Livewire;

use App\Models\Katalog;
use Livewire\Component;

class KatalogComponent extends Component
{
    public $katalogs;

    public function mount()
    {
        $this->katalogs = Katalog::all();
    }

    public function render()
    {
        return view('livewire.katalog-component');
    }
}
