<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rkecamatan as modelKecamatan;


class MasterKecamatan extends Component
{
    public $masterKecamatan;

    public function render()
    {
        $this->masterKecamatan= modelKecamatan::where('kd_prop', 12)->orderby('kd_kec')->get();
        return view('livewire.masters.kecamatan.master-kecamatan');
    }
}
