<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rkabupaten as modelKotaKabupaten;

class MasterKotaKabupaten extends Component
{
    public $masterKabupatenKota;

    public function render()
    {
        $this->masterKabupatenKota=modelKotaKabupaten::where('kd_prop', 12)->orderby('kd_kab')->get();
        return view('livewire.masters.kotakabupaten.master-kota-kabupaten');
    }
}
