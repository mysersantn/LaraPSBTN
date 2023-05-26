<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mkantor as ModelMkantor;
use Livewire\WithPagination;

class MasterRekanan extends Component
{
    use WithPagination;
    public $general_search;

    // public function render()
    // {
    //     $g_search = $this->general_search;

    //     if ($g_search == Null) {
    //         return view('livewire.master.master-rekanan', [
    //             'masterRekanan' => ModelMkantor::where('j_kantor','R')->orderby('kd_kantor')->paginate(),
    //         ]);
    //     } else {
    //         return view('livewire.master.master-rekanan', [
    //             'masterRekanan' => ModelMkantor::where('j_kantor','R')->where('kantor', 'LIKE', '%' . $g_search . '%')->orderby('kd_kantor')->paginate(),
    //         ]);
    //     }
    // }
    public function render()
    {
        $g_search = $this->general_search;

        $masterRekanan = ModelMkantor::where('j_kantor', 'R')
            ->orderBy('kd_kantor')
            ->when($g_search, function ($query) use ($g_search) {
                return $query->where('kantor', 'LIKE', '%' . $g_search . '%');
            })
            ->paginate();

        return view('livewire.master.master-rekanan', [
            'masterRekanan' => $masterRekanan,
        ]);
    }
}
