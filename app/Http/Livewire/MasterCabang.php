<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\mkantor as ModelMkantor;

class MasterCabang extends Component
{
    Public $masterCabang;

    public function render()
    {
        $this->masterCabang=ModelMkantor::where('j_kantor','C')->get();
        dd($this->masterCabang);
        return view('livewire.master.master-cabang');
    }
}
