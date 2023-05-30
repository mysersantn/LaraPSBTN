<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tpendaftaran as modelPendaftaran;
use App\Models\Mkantor as modelCabang;
use App\Models\Rkecamatan as modelKecamatan;
use App\Models\Rkelurahan as modelKelurahan;
use App\Models\Rkabupaten as modelKotaKabupaten;
use App\Models\Rprovinsi as modelProvinsi;
use App\Models\Mkdpos as modelKdpos;
use Carbon\Carbon;

class PendaftaranPelanggan extends Component
{
    public $pendaftaran, $cabang, $kodepos, $provinsi, $kotaKabupaten, $kecamatan, $kelurahan;
    public $kd_prop, $kd_kab, $kd_kec, $kd_kel, $kd_pos;
    public $tgl_daftar,
           $tgl_today,
           $jenisSambungan,
           $namaPemohon,
           $noHpPemohon,
           $alamatPemohon,
           $namaPemilik,
           $noKtp,
           $npwp,
           $noTelpPemilik,
           $noHpPemilik,
           $alamatPemasangan,
           $noRumah,
           $rtRw,
           $email,
           $peruntukanPenggunaanAir,
           $luasBangunan,
           $jumlahHunian;

    public function mount()
    {
        // $this->tgl_today = Carbon::now()->format('Y-m-d H:i:s');
    }

    public function render()
    {
        $this->tgl_today = Carbon::now()->format('Y-m-d');
        $this->cabang = modelCabang::where('j_kantor', 'C')->get();
        $this->provinsi = modelProvinsi::where('kd_prop', 12)->get();

        // dd($this->tgl_today);
        return view('livewire.pendaftarans.pendaftaran-pelanggan');
    }

    public function getKotaKabupaten()
    {
        $this->kotaKabupaten = modelKotaKabupaten::where('kd_prop', 12)->get();
    }

    public function getKecamatan()
    {
        $this->kecamatan = modelKecamatan::where('kd_prop', 12)
            ->where('kd_kab', $this->kd_kab)
            ->get();
    }

    public function getKelurahan()
    {
        $this->kelurahan = modelKelurahan::where('kd_prop', 12)
            ->where('kd_kab', $this->kd_kab)
            ->where('kd_kec', $this->kd_kec)
            ->get();
    }

    public function getKodePos()
    {
        $this->kodepos = modelKdpos::where('kd_prop', 12)
            ->where('kd_kab', $this->kd_kab)
            ->where('kd_kec', $this->kd_kec)
            ->where('kd_kel', $this->kd_kel)
            ->get();
    }

    public function daftar()
    {
    }
}
