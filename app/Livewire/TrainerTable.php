<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Barang;

class TrainerTable extends Component
{
    public function render()
    {
        $trainer = Barang::all();

        return view('livewire.trainer-table', [
            'trainer' => $trainer,
        ]);
    }
}
