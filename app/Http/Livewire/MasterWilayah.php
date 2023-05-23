<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mwilayah as ModelMwilayah;

class MasterWilayah extends Component
{
    public $masterWilayah;

    public function render()
    {
        $this->masterWilayah=ModelMwilayah::all();
        return view('livewire.master.master-wilayah');
    }
}
