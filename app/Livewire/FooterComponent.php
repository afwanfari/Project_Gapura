<?php

namespace App\Livewire;

use App\Models\Footer;
use Livewire\Component;

class FooterComponent extends Component
{
    public function render()
    {
        $dataAlamat = Footer::all();
        return view('livewire.footer-component', ['dataAlamat' => $dataAlamat]);
    }
}
