<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mkantor as modelCabang;
use Livewire\WithPagination;

class MasterCabang extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.masters.cabang.master-cabang', [
            'masterCabang' => modelCabang::where('j_kantor', 'C')
                ->where('kantor', 'LIKE', '%' . $this->search . '%')
                ->orderby('kd_kantor')
                ->paginate(25),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
