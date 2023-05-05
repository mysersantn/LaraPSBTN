<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\PendaftaranPelanggan;
use App\Http\Livewire\{PendaftaranMain,PembayaranMain,PusatMain,SuperUserMain};
use App\Http\Livewire\{MasterCabang,MasterGolonganBangunan,MasterJalan,MasterKecamatan,MasterKelurahan,MasterKodePos,MasterKotaKabupaten,MasterMaterial,MasterProvinsi,MasterRekanan,MasterTypeMeter,MasterWilayah};


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
    Route::get('/pendaftaran-main', PendaftaranMain::class)->name('pendaftaran-main');
    Route::get('/pembayaran-main', PembayaranMain::class)->name('pembayaran-main');
    Route::get('/pusat-main', PusatMain::class)->name('pusat-main');
    Route::get('/super-user-main', SuperUserMain::class)->name('super-user-main');

    // submenu
    Route::get('/pendaftaran-pelanggan', PendaftaranPelanggan::class)->name('pendaftaran-pelanggan');


    // Submenu Master Data
    Route::get('/master-cabang', MasterCabang::class)->name('master-cabang');
    Route::get('/master-golongan-bangunan', MasterGolonganBangunan::class)->name('master-golongan-bangunan');
    Route::get('/master-jalan', MasterJalan::class)->name('master-jalan');
    Route::get('/master-kecamatan', MasterKecamatan::class)->name('master-kecamatan');
    Route::get('/master-kelurahan', MasterKelurahan::class)->name('master-kelurahan');
    Route::get('/master-kode-pos', MasterKodePos::class)->name('master-kode-pos');
    Route::get('/master-kota-kabupaten', MasterKotaKabupaten::class)->name('master-kota-kabupaten');
    Route::get('/master-material', MasterMaterial::class)->name('master-material');
    Route::get('/master-provinsi', MasterProvinsi::class)->name('master-provinsi');
    Route::get('/master-rekanan', MasterRekanan::class)->name('master-rekanan');
    Route::get('/master-type-meter', MasterTypeMeter::class)->name('master-type-meter');
    Route::get('/master-wilayah', MasterWilayah::class)->name('master-wilayah');



});
