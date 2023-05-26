<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mkdpos as ModelMkdpos;

class MasterKodePos extends Component
{
    public $masterKodePos;

    public function render()
    {
        $this->masterKodePos=ModelMkdpos::where('kd_pos','<>','00000')->where('kd_prop', 12)->orderby('kd_pos')->get();
        return view('livewire.master.master-kode-pos');
    }
}
