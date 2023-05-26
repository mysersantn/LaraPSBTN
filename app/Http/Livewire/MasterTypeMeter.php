<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mtypemeter as ModelMtypemeter;


class MasterTypeMeter extends Component
{
    public $masterTypeMeter;

    public function render()
    {
        $this->masterTypeMeter=ModelMtypemeter::orderby('kd_typemeter')->get();

        return view('livewire.master.master-type-meter');
    }
}
