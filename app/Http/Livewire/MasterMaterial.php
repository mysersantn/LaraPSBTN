<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mmaterial as modelMaterial;

class MasterMaterial extends Component
{
    public $masterMaterial;

    public function render()
    {
        $this->masterMaterial = modelMaterial::orderby('kd_material')->get();
        return view('livewire.masters.material.master-material');
    }
}
