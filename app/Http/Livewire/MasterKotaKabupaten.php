<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rkabupaten as ModelMkabupaten;

class MasterKotaKabupaten extends Component
{
    public $masterKabupatenKota;

    public function render()
    {
        $this->masterKabupatenKota=ModelMkabupaten::where('kd_prop','<>','00')->orderby('kd_kab')->get();
        return view('livewire.master.master-kota-kabupaten');
    }
}
