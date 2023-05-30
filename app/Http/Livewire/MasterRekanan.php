<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mkantor as modelRekanan;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class MasterRekanan extends Component
{
    use WithPagination;
    public $search = '', $createMode, $updateMode;
    public $masterRekananGet, $kd_kantor, $kantor, $nm_kepala, $alamat, $no_telp;

    public function render()
    {
        return view('livewire.masters.rekanan.master-rekanan', [
            'masterRekanan' => modelRekanan::where('j_kantor', 'R')
                ->where('kantor', 'LIKE', '%' . $this->search . '%')
                // ->orderby('kd_kantor')
                ->orderby('id','DESC')
                ->paginate(25),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    private function resetInput()
    {
        $this->resetValidation();
        $this->kd_kantor='';
        $this->kantor='';
        $this->nm_kepala='';
        $this->no_telp='';
        $this->alamat='';

    }

    public function close()
    {
        $this->resetValidation();
        $this->createMode = false;
        $this->updateMode = false;
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function store()
    {
        $this->validate([
            'kd_kantor' => 'required',
            'kantor' => 'required',
            'nm_kepala' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $insert_masterRekanan = modelRekanan::create([
            'kd_kantor' => $this->kd_kantor,
            'kantor' => $this->kantor,
            'nm_kepala' => $this->nm_kepala,
            'no_telp' => $this->no_telp,
            'alamat' => $this->alamat,
            'j_kantor' => 'R',
            'crt_userid' => Auth::user()->id,
            'nip_kepala' => NULL,
        ]);

        $this->resetInput();
        $this->createMode = false;

        session()->flash('message', 'Master data rekanan successfully created.');
    }

    public function view($id)
    {
        $this->updateMode = true;

        $this->masterRekananGet = new Collection();
        $record = modelRekanan::findOrFail($id);
        $this->selected_id = $id;
        $this->kd_kantor = $record->kd_kantor;
        $this->kantor = $record->kantor;
        $this->nm_kepala = $record->nm_kepala;
        $this->no_telp = $record->no_telp;
        $this->alamat = $record->kd_kantor;

    }

    public function update()
    {
        $this->validate([
            'kd_kantor' => 'required',
            'kantor' => 'required',
            'nm_kepala' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $record = modelRekanan::find($this->selected_id);
        $record->update([
            'kd_kantor' => $this->kd_kantor,
            'kantor' => $this->kantor,
            'nm_kepala' => $this->nm_kepala,
            'no_telp' => $this->no_telp,
            'alamat' => $this->alamat,
            'j_kantor' => 'R',
            'crt_userid' => Auth::user()->id,
            'nip_kepala' => NULL,
        ]);

        $this->resetInput();
        $this->updateMode = false;

        session()->flash('message', 'Master data rekanan successfully updated.');
    }
}
