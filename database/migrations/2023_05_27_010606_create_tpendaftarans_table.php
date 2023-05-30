<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tpendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('kd_daftar');
            $table->datetime('tgl_daftar')->nullable();
            $table->string('s_daftar')->nullable();
            $table->string('j_daftar')->nullable();
            $table->string('pemohon')->nullable();
            $table->string('almt_pemohon')->nullable();
            $table->string('no_telp_pemohon')->nullable();
            $table->string('pemilik')->nullable();
            $table->string('almt_pasang')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('kd_pos')->nullable();
            $table->string('kd_prop')->nullable();
            $table->string('kd_kab')->nullable();
            $table->string('kd_kel')->nullable();
            $table->string('kd_kec')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('s_guna')->nullable();
            $table->string('s_persil')->nullable();
            $table->string('jml_penghuni')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('no_npwp')->nullable();
            $table->string('luas_persil')->nullable();
            // $table->datetime('crt_tgl')->nullable();
            // $table->datetime('upd_tgl')->nullable();
            $table->string('j_pekerjaan')->nullable();
            $table->string('email')->nullable();
            $table->string('kd_tagih')->nullable();
            $table->string('periode_bayar')->nullable();
            $table->string('kd_wilayah')->nullable();
            $table->string('kd_sl')->nullable();
            $table->string('no_rumah')->nullable();
            $table->string('jalan_pasang')->nullable();
            $table->string('kd_jalan')->nullable();
            $table->string('tipe_standar')->nullable();
            $table->string('maps_lat')->nullable();
            $table->string('maps_long')->nullable();
            $table->string('kd_cabang')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('foto_rek')->nullable();
            $table->string('npa_tetangga')->nullable();
            $table->string('s_guna_al')->nullable();
            $table->string('no_bonmeter')->nullable();
            $table->string('crt_userid')->nullable();
            $table->string('upd_userid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpendaftarans');
    }
};
