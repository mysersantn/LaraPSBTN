<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rkecamatan as ModelMkecamatan;


class MasterKecamatan extends Component
{
    public $masterKecamatan;

    public function render()
    {
        $this->masterKecamatan= ModelMkecamatan::where('kd_prop','<>','00')->orderby('kd_kec')->get();
        return view('livewire.master.master-kecamatan');
    }
}
