<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rprovinsi as modelProvinsi;

class MasterProvinsi extends Component
{
    public $masterProvinsi;

    public function render()
    {
        $this->masterProvinsi=modelProvinsi::where('kd_prop', 12)->orderby('kd_prop')->get();
        return view('livewire.masters.provinsi.master-provinsi');
    }
}
