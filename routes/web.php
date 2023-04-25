<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\PendaftaranPelanggan;
use App\Http\Livewire\{PendaftaranMain,PembayaranMain,PusatMain,SuperUserMain};
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

});
