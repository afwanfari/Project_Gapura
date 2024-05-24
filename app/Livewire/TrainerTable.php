<?php

namespace App\Livewire;

use Livewire\Component;
use Dotenv\Util\Str; 
use App\Models\Barang;

class TrainerTable extends Component
{
    public $search = '';

    public function render()
    {
        $trainer = Barang::query()
            ->where('nama', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.trainer-table', [
            'trainer' => $trainer,
        ]);
    }
}
