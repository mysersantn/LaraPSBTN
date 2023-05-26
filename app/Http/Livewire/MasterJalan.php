<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mdsml as ModelJalan;

class MasterJalan extends Component
{
    public $masterJalan;

    public function render()
    {
        $this->masterJalan=ModelJalan::orderby('kd_cabang')->get();
        return view('livewire.master.master-jalan');
    }
}
