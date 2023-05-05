<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\mkantor as ModelMkantor;

class MasterRekanan extends Component
{
    public $masterRekanan;

    public function render()
    {
        $this->masterRekanan=ModelMkantor::where('j_kantor','R')->get();
        return view('livewire.master.master-rekanan');
    }
}
