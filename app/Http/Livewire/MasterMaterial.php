<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mmaterial as ModelMmaterial;

class MasterMaterial extends Component
{
    public $masterMaterial;

    public function render()
    {
        $this->masterMaterial = ModelMmaterial::orderby('kd_material')->get();
        return view('livewire.master.master-material');
    }
}
