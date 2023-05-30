<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mwilayah as modelWilayah;

class MasterWilayah extends Component
{
    public $masterWilayah;

    public function render()
    {
        $this->masterWilayah=modelWilayah::orderby('kd_cabang')->orderby('kd_wilayah')->get();
        return view('livewire.masters.wilayah.master-wilayah');
    }
}
