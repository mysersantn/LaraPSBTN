<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rkelurahan as modelKelurahan;

class MasterKelurahan extends Component
{
    public $masterKelurahan;

    public function render()
    {
        $this->masterKelurahan=modelKelurahan::where('kd_prop', 12)->orderby('kd_kel')->get();
        return view('livewire.masters.kelurahan.master-kelurahan');
    }
}
