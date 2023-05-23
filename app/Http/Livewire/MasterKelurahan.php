<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rkelurahan as ModelMkelurahan;

class MasterKelurahan extends Component
{
    public $masterKelurahan;

    public function render()
    {
        $this->masterKelurahan=ModelMkelurahan::where('kd_prop','<>','00')->orderby('kd_kel')->get();
        return view('livewire.master.master-kelurahan');
    }
}
