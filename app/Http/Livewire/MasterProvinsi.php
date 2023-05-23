<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rprovinsi as ModelProvinsi;


class MasterProvinsi extends Component
{
    public $masterProvinsi;

    public function render()
    {
        $this->masterProvinsi=ModelProvinsi::where('kd_prop','<>','00')->orderby('kd_prop')->get();
        return view('livewire.master.master-provinsi');
    }
}
