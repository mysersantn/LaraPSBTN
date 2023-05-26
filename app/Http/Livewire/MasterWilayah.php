<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mwilayah as ModelMwilayah;

class MasterWilayah extends Component
{
    public $masterWilayah;

    public function render()
    {
        $this->masterWilayah=ModelMwilayah::orderby('kd_cabang')->orderby('kd_wilayah')->get();
        return view('livewire.master.master-wilayah');
    }
}
