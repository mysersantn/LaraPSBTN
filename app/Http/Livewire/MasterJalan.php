<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mdsml as modelJalan;

class MasterJalan extends Component
{
    public $masterJalan;

    public function render()
    {
        $this->masterJalan=modelJalan::orderby('kd_cabang')->get();
        return view('livewire.masters.jalan.master-jalan');
    }
}
