<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mkantor as ModelMkantor;

class MasterCabang extends Component
{
    Public $masterCabang;

    public function render()
    {
        $this->masterCabang=ModelMkantor::where('j_kantor','C')->orderby('kd_kantor')->get();
        return view('livewire.master.master-cabang');
    }
}
