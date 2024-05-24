<?php

namespace App\Livewire;

use App\Models\Barang;
use Livewire\Component;
use Livewire\WithPagination;

class TrainerTable extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'idbarang'; // Default sort field
    public $sortAsc = true; // Default sort direction

    public function render()
    {
        $searchTerm = '%' . $this->search . '%';

        // Fetch and filter trainers based on the search term, then apply sorting
        $trainers = Barang::where('nama', 'like', $searchTerm)
            ->orWhere('jenis_barang', 'like', $searchTerm)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate(10); // You can adjust the pagination size as needed

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
}
