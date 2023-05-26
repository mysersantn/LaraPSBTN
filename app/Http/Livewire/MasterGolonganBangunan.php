<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mbangunan as ModelMbangunan;

class MasterGolonganBangunan extends Component
{
    public $masterGolonganBangunan;

    public function render()
    {
        $this->masterGolonganBangunan=ModelMbangunan::orderby('kd_bangunan')->get();
        return view('livewire.master.master-golongan-bangunan');
    }
}
