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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;


class PendaftaranPelanggan extends Component
{
    public $pendaftaran, $cabang, $kodepos, $provinsi, $kotaKabupaten, $kecamatan, $kelurahan;
    public $tgl_daftar,
       $tgl_today,
       $s_daftar,
       $j_daftar,
       $pemohon,
       $almt_pemohon,
       $no_telp_pemohon,
       $pemilik,
       $almt_pasang,
       $no_hp,
       $no_telp,
       $kd_pos,
       $kd_prop,
       $kd_kab,
       $kd_kec,
       $kd_kel,
       $rt,
       $rw,
       $s_guna,
       $s_persil,
       $jml_penghuni,
       $no_ktp,
       $no_npwp,
       $luas_persil,
       $j_pekerjaan,
       $email,
       $kd_tagih,
       $periode_bayar,
       $kd_wilayah,
       $kd_sl,
       $no_rumah,
       $kd_jalan,
       $maps_lat,
       $maps_long,
       $kd_cabang,
       $foto_ktp,
       $foto_rek,
       $npa_tetangga,
       $s_guna_al,
       $no_bonmeter,
       $tipe_standart;


    public function mount()
    {
        // $this->tgl_today = Carbon::now()->format('Y-m-d H:i:s');
    }

    public function render()
    {
        $this->tgl_today = Carbon::now()->format('Y-m-d');
        $this->cabang = modelCabang::where('j_kantor', 'C')->get();
        $this->provinsi = modelProvinsi::where('kd_prop', 12)->get();
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

    private function resetInput()
    {
    $this->resetValidation();
    $this->tgl_daftar = '';
    $this->pemohon = '';
    $this->no_telp_pemohon = '';
    $this->almt_pemohon = '';
    $this->pemilik = '';
    $this->no_ktp = '';
    $this->no_npwp = '';
    $this->no_telp = '';
    $this->no_hp = '';
    $this->kd_prop = '';
    $this->kd_kab = '';
    $this->kd_kec = '';
    $this->kd_kel = '';
    $this->kd_pos = '';
    $this->almt_pasang = '';
    $this->no_rumah = '';
    $this->rt = '';
    $this->rw = '';
    $this->luas_persil = '';
    $this->email = '';
    }

    public function store()
    {
        $this->validate([
            'tgl_daftar' => 'required',
            'pemohon' => 'required',
            'no_telp_pemohon' => 'required',
            'almt_pemohon' => 'required',
            'pemilik' => 'required',
            'no_hp' => 'required',
            'no_telp' => 'required',
            'kd_pos' => 'required',
            'kd_prop' => 'required',
            'kd_kab' => 'required',
            'kd_kec' => 'required',
            'kd_kel' => 'required',
            'no_ktp' => 'required',
            'no_rumah' => 'required',
            'almt_pasang' => 'required',
        ], [
            'required' => 'Kolom :attribute harus diisi.',
        ]);


        $insert_pendaftaran = modelPendaftaran::create([
            // 'kd_daftar' => $this->kd_daftar,
            'tgl_daftar' => Carbon::parse($this->tgl_daftar)->format('Y-m-d H:i:s'),
            'pemohon' => $this->pemohon,
            'almt_pemohon' => $this->almt_pemohon,
            'no_telp_pemohon' => $this->no_telp_pemohon,
            'pemilik' => $this->pemilik,
            'almt_pasang' => $this->almt_pasang,
            'no_hp' => $this->no_hp,
            'no_telp' => $this->no_telp,
            'kd_pos' => $this->kd_pos,
            'kd_prop' => $this->kd_prop,
            'kd_kab' => $this->kd_kab,
            'kd_kec' => $this->kd_kec,
            'kd_kel' => $this->kd_kel,
            'rt' => $this->rt,
            'rw' => $this->rw,
            'jml_penghuni' => $this->jml_penghuni,
            'no_ktp' => $this->no_ktp,
            'no_npwp' => $this->no_npwp,
            'luas_persil' => $this->luas_persil,
            'email' => $this->email,
            'no_rumah' => $this->no_rumah,
            'kd_cabang' => $this->kd_cabang,
            'crt_userid' => Auth::user()->id,
        ]);

        // dd($insert_pendaftaran);

        $this->resetInput();

        session()->flash('message', 'Master data rekanan successfully created.');
    }

}
