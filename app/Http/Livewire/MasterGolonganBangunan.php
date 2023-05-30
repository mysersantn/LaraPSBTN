<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mbangunan as modelBangunan;

class MasterGolonganBangunan extends Component
{
    public $masterGolonganBangunan;

    public function render()
    {
        $this->masterGolonganBangunan=modelBangunan::orderby('kd_bangunan')->get();
        return view('livewire.masters.golonganbangunan.master-golongan-bangunan');
    }
}
