<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mtypemeter as modelTypemeter;


class MasterTypeMeter extends Component
{
    public $masterTypeMeter;

    public function render()
    {
        $this->masterTypeMeter=modelTypemeter::orderby('kd_typemeter')->get();

        return view('livewire.masters.typemter.master-type-meter');
    }
}
