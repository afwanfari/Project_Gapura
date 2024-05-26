<?php

namespace App\Livewire;

use App\Models\Barang;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class TrainerTable extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search = '';
    public $sortField = 'idbarang'; // Default sort field
    public $sortAsc = true; // Default sort direction

    public function render()
    {
        // Fetch and filter trainers based on the search term, then apply sorting
        $trainers = Barang::where('nama', 'like', '%' . $this->search . '%')
            ->orWhere('jenis_barang', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate(20);

        return view('livewire.trainer-table', [
            'trainers' => $trainers,
        ]);
    }

    public function sortBy($field)
    {
        // Toggle sort direction if same field is clicked again
        if ($field === $this->sortField) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }
    public function search($value)
    {
        $this->search = $value;
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
