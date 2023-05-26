<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mkantor as ModelMkantor;
use Livewire\WithPagination;

class MasterRekanan extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.master.master-rekanan', [
            'masterRekanan' => ModelMkantor::where('j_kantor', 'R')
                ->where('kantor', 'LIKE', '%' . $this->search . '%')
                ->orderby('kd_kantor')
                ->paginate(5),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
