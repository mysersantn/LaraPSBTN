<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Livewire\WithProperties;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Tpendaftaran as modelPendaftaran;
use App\Models\Tpendaftaransts as modelPendaftaransts;
use App\Models\Mkantor as modelCabang;
use Livewire\WithPagination;

class PendaftaranVerifikasi extends Component
{
    public $cabang, $jumlahPendaftaranNonCabang, $jumlahPendaftaranCabang;
    public $filterCabang, $filterNoregister, $filterTanggal, $filterNama, $filterAlamat;

    public $showFilter = false;
    public $detailMode;
    public $pendafataranGet;

    use WithPagination;

    public function render()
    {
        $this->baseUrl = 'pendaftaran-verifikasi';
        $this->closeUrl = 'pendaftaran-main';

        $this->cabang = modelCabang::where('j_kantor', 'C')
            ->orderby('kd_kantor')
            ->get();

        $pendaftaranCabang = modelPendaftaran::where('s_daftar', '0')
            ->when(
                auth()->user()->kocab === '00',
                function ($query) {
                    return $query->where('kd_cabang', $this->filterCabang);
                },
                function ($query) {
                    return $query->where('kd_cabang', auth()->user()->kocab);
                },
            )
            ->when($this->filterTanggal, function ($query) {
                return $query->where('tgl_daftar', $this->filterTanggal);
            })
            ->when($this->filterNoregister, function ($query) {
                return $query->where('kd_daftar', $this->filterNoregister);
            })
            ->when($this->filterNama, function ($query) {
                return $query->where('pemohon', 'like', '%' . $this->filterNama . '%');
            })
            ->when($this->filterAlamat, function ($query) {
                return $query->where('almt_pemohon', 'like', '%' . $this->filterAlamat . '%');
            })
            ->orderBy('tgl_daftar')
            ->paginate(5, ['*'], 'cabangPage');

        $this->jumlahPendaftaranCabang = modelPendaftaran::where('s_daftar', '0')
            ->when(
                auth()->user()->kocab === '00',
                function ($query) {
                    return $query->where('kd_cabang', $this->filterCabang);
                },
                function ($query) {
                    return $query->where('kd_cabang', auth()->user()->kocab);
                },
            )
            ->when($this->filterTanggal, function ($query) {
                return $query->where('tgl_daftar', $this->filterTanggal);
            })
            ->when($this->filterNoregister, function ($query) {
                return $query->where('kd_daftar', $this->filterNoregister);
            })
            ->when($this->filterNama, function ($query) {
                return $query->where('pemohon', 'like', '%' . $this->filterNama . '%');
            })
            ->when($this->filterAlamat, function ($query) {
                return $query->where('almt_pemohon', 'like', '%' . $this->filterAlamat . '%');
            })
            ->count();

        $pendaftaranNonCabang = modelPendaftaran::where('s_daftar', '0')
            ->whereNull('kd_cabang')
            ->when($this->filterTanggal, function ($query) {
                return $query->where('tgl_daftar', $this->filterTanggal);
            })
            ->when($this->filterNoregister, function ($query) {
                return $query->where('kd_daftar', $this->filterNoregister);
            })
            ->when($this->filterNama, function ($query) {
                return $query->where('pemohon', 'like', '%' . $this->filterNama . '%');
            })
            ->when($this->filterAlamat, function ($query) {
                return $query->where('almt_pemohon', 'like', '%' . $this->filterAlamat . '%');
            })
            ->orderBy('tgl_daftar')
            ->paginate(5, ['*'], 'nonCabangPage');

        $this->jumlahPendaftaranNonCabang = modelPendaftaran::where('s_daftar', '0')
            ->whereNull('kd_cabang')
            ->when($this->filterTanggal, function ($query) {
                return $query->where('tgl_daftar', $this->filterTanggal);
            })
            ->when($this->filterNoregister, function ($query) {
                return $query->where('kd_daftar', $this->filterNoregister);
            })
            ->when($this->filterNama, function ($query) {
                return $query->where('pemohon', 'like', '%' . $this->filterNama . '%');
            })
            ->when($this->filterAlamat, function ($query) {
                return $query->where('almt_pemohon', 'like', '%' . $this->filterAlamat . '%');
            })
            ->count();

        return view('livewire.pendaftarans.pendaftaran-verifikasi', [
            'pendaftaranCabang' => $pendaftaranCabang,
            'pendaftaranNonCabang' => $pendaftaranNonCabang,
        ]);
    }

    public function toggleFilter()
    {
        $this->showFilter = !$this->showFilter;
    }

    public function cari()
    {
        $this->toggleFilter();
        $this->resetPage('cabangPage');
        $this->resetPage('nonCabangPage');
    }

    public function resetAll()
    {
        $this->filterCabang = null;
        $this->filterNoregister = null;
        $this->filterTanggal = null;
        $this->filterNama = null;
        $this->filterAlamat = null;
        $this->resetPage('cabangPage');
        $this->resetPage('nonCabangPage');
    }

    public function close()
    {
        $this->detailMode = false;
    }

    public function detail($id)
    {
        $this->detailMode = true;

        $this->dispatchBrowserEvent('showMap', [
            'latitude' => 2.1154,
            'longitude' => 99.5451,
        ]);
        $this->pendafataranGet = new Collection();
        $record = modelPendaftaran::findOrFail($id);
        $this->selected_id = $id;
        $this->kd_daftar = $record->kd_daftar;
        $this->pemilik = $record->pemilik;
        $this->no_hp = $record->no_hp;
        $this->almt_pasang = $record->almt_pasang;
        $this->kd_prop = $record->rprovinsi->provinsi;
        $this->kd_kab = $record->rkabupaten->kabupaten;
        $this->kd_kec = $record->rkecamatan->kecamatan;
        $this->kd_kel = $record->rkelurahan->kelurahan;
        $this->kd_pos = $record->kd_pos;
        $this->kd_cabang = $record->kd_cabang;

    }
}
