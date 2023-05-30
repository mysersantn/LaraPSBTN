<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mkdpos as modelKdpos;

class MasterKodePos extends Component
{
    public $masterKodePos;

    public function render()
    {
        $this->masterKodePos=modelKdpos::where('kd_prop', 12)->orderby('kd_pos')->get();
        return view('livewire.masters.kodepos.master-kode-pos');
    }
}
