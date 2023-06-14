<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{PendaftaranMain, PembayaranMain, PusatMain, SuperUserMain};
use App\Http\Livewire\{PendaftaranPelanggan, PendaftaranVerifikasi, SuratPerintahKerjaOpname, InputHasilSurvey,VerifikasiHasilSurvey, AnggaranBiayaPemasangan, PemberitahuanBiayaPasang, PermintaanMeterAir, SuratPerintahKerjaPemasangan, BuktiPermintaanPengeluaranBarang, BeritaAcaraPemasangan, AktivasiPelanggan, MigrasiBacameter, Ubahdatanama, Ubahdatasurvey, Ubahdatapemasangan, Cetakulangbap, Cetakulangspko, Cetakulangabpd, Cetakulangsurvey, Cetakulangbppb, Cetakulangaktivasi, Cuformpendaftaran, Cetakperjanjianpelanggan};
use App\Http\Livewire\{MasterCabang, MasterGolonganBangunan, MasterJalan, MasterKecamatan, MasterKelurahan, MasterKodePos, MasterKotaKabupaten, MasterMaterial, MasterProvinsi, MasterRekanan, MasterTypeMeter, MasterWilayah};
use App\Http\Livewire\{Daftarcalonplgygbermohon, Daftarplgygsudahbayar, Daftarpermohonansudahsurvey, Daftarpermohonanyangsudahbayar, Daftarpermohonansudahpasang, Daftarpermohonansambunganbaru, Daftarcalonpelangganygsdhpasang, Daftarpemasangansambunganbaru, Daftarcalonpelangganyangsudahaktif};
use App\Http\Livewire\{Sudahpasangbelumaktif, Sudahbayarbelumpasang, Calonpelangganyangbelumpasang, Calonpelanggansurveytidakberhasil};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //main menu
    Route::get('pendaftaran-main', PendaftaranMain::class)->name('pendaftaran-main');
    Route::get('pembayaran-main', PembayaranMain::class)->name('pembayaran-main');
    Route::get('pusat-main', PusatMain::class)->name('pusat-main');
    Route::get('super-user-main', SuperUserMain::class)->name('super-user-main');

    // submenu pendaftaran
    Route::get('pendaftaran-pelanggan', PendaftaranPelanggan::class)->name('pendaftaran-pelanggan');

    // lagi di kerjain
    Route::get('pendaftaran-verifikasi', PendaftaranVerifikasi::class)->name('pendaftaran-verifikasi');
    Route::get('surat-perintah-kerja-opname', SuratPerintahKerjaOpname::class)->name('surat-perintah-kerja-opname');
    Route::get('input-hasil-survey', InputHasilSurvey::class)->name('input-hasil-survey');
    Route::get('verifikasi-hasil-survey', VerifikasiHasilSurvey::class)->name('verifikasi-hasil-survey');
    Route::get('anggaran-biaya-pemasangan', AnggaranBiayaPemasangan::class)->name('anggaran-biaya-pemasangan');
    Route::get('pemberitahuan-biaya-pasang', PemberitahuanBiayaPasang::class)->name('pemberitahuan-biaya-pasang');
    Route::get('permintaan-meter-air', PermintaanMeterAir::class)->name('permintaan-meter-air');
    Route::get('surat-perintah-kerja-pemasangan', SuratPerintahKerjaPemasangan::class)->name('surat-perintah-kerja-pemasangan');
    Route::get('bukti-permintaan-pengeluaran-barang', BuktiPermintaanPengeluaranBarang::class)->name('bukti-permintaan-pengeluaran-barang');
    Route::get('berita-acara-pemasangan', BeritaAcaraPemasangan::class)->name('berita-acara-pemasangan');
    Route::get('aktivasi-pelanggan', AktivasiPelanggan::class)->name('aktivasi-pelanggan');
    Route::get('migrasi-bacameteran', MigrasiBacameter::class)->name('migrasi-bacameteran');

    Route::get('ubahdatanama', Ubahdatanama::class)->name('ubahdatanama');
    Route::get('ubahdatasurvey', Ubahdatasurvey::class)->name('ubahdatasurvey');
    Route::get('ubahdatapemasangan', Ubahdatapemasangan::class)->name('ubahdatapemasangan');
    Route::get('cetakulangbap', Cetakulangbap::class)->name('cetakulangbap');
    Route::get('cetakulangspko', Cetakulangspko::class)->name('cetakulangspko');
    Route::get('cetakulangabpd', Cetakulangabpd::class)->name('cetakulangabpd');
    Route::get('cetakulangsurvey', Cetakulangsurvey::class)->name('cetakulangsurvey');
    Route::get('cetakulangbppb', Cetakulangbppb::class)->name('cetakulangbppb');
    Route::get('cetakulangaktivasi', Cetakulangaktivasi::class)->name('cetakulangaktivasi');
    Route::get('cuformpendaftaran', Cuformpendaftaran::class)->name('cuformpendaftaran');
    Route::get('cetakperjanjianpelanggan', Cetakperjanjianpelanggan::class)->name('cetakperjanjianpelanggan');

    // submenu laporan pendaftaran calon pelanggan
    Route::get('daftarcalonplgygbermohon', Daftarcalonplgygbermohon::class)->name('daftarcalonplgygbermohon');
    Route::get('daftarplgygsudahbayar', Daftarplgygsudahbayar::class)->name('daftarplgygsudahbayar');
    Route::get('daftarpermohonansudahsurvey', Daftarpermohonansudahsurvey::class)->name('daftarpermohonansudahsurvey');
    Route::get('daftarpermohonanyangsudahbayar', Daftarpermohonanyangsudahbayar::class)->name('daftarpermohonanyangsudahbayar');
    Route::get('daftarpermohonansudahpasang', Daftarpermohonansudahpasang::class)->name('daftarpermohonansudahpasang');
    Route::get('daftarpermohonansambunganbaru', Daftarpermohonansambunganbaru::class)->name('daftarpermohonansambunganbaru');
    Route::get('daftarcalonpelangganygsdhpasang', Daftarcalonpelangganygsdhpasang::class)->name('daftarcalonpelangganygsdhpasang');
    Route::get('daftarpemasangansambunganbaru', Daftarpemasangansambunganbaru::class)->name('daftarpemasangansambunganbaru');
    Route::get('daftarcalonpelangganyangsudahaktif', Daftarcalonpelangganyangsudahaktif::class)->name('daftarcalonpelangganyangsudahaktif');
    Route::get('sudahpasangbelumaktif', Sudahpasangbelumaktif::class)->name('sudahpasangbelumaktif');
    Route::get('sudahbayarbelumpasang', Sudahbayarbelumpasang::class)->name('sudahbayarbelumpasang');
    Route::get('calonpelangganyangbelumpasang', Calonpelangganyangbelumpasang::class)->name('calonpelangganyangbelumpasang');
    Route::get('calonpelanggansurveytidakberhasil', Calonpelanggansurveytidakberhasil::class)->name('calonpelanggansurveytidakberhasil');

    // Submenu Master Data
    Route::get('/master-rekanan', MasterRekanan::class)->name('master-rekanan');
    Route::get('/master-cabang', MasterCabang::class)->name('master-cabang');
    Route::get('/master-golongan-bangunan', MasterGolonganBangunan::class)->name('master-golongan-bangunan');
    Route::get('/master-jalan', MasterJalan::class)->name('master-jalan');
    Route::get('/master-kecamatan', MasterKecamatan::class)->name('master-kecamatan');
    Route::get('/master-kelurahan', MasterKelurahan::class)->name('master-kelurahan');
    Route::get('/master-kode-pos', MasterKodePos::class)->name('master-kode-pos');
    Route::get('/master-kota-kabupaten', MasterKotaKabupaten::class)->name('master-kota-kabupaten');
    Route::get('/master-material', MasterMaterial::class)->name('master-material');
    Route::get('/master-provinsi', MasterProvinsi::class)->name('master-provinsi');
    Route::get('/master-type-meter', MasterTypeMeter::class)->name('master-type-meter');
    Route::get('/master-wilayah', MasterWilayah::class)->name('master-wilayah');
});
