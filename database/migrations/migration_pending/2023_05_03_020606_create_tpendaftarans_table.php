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
            $table->string('kd_daftar')->primary();
            $table->date('tgl_daftar');
            $table->integer('s_daftar');
            $table->integer('j_daftar');
            $table->string('pemohon');
            $table->string('almt_pemohon');
            $table->string('no_telp_pemohon');
            $table->string('pemilik');
            $table->string('almt_pasang');
            $table->string('phone');
            $table->string('no_telp');
            $table->string('kd_pos');
            $table->string('kd_prop');
            $table->string('kd_kab');
            $table->string('kd_kel');
            $table->string('kd_kec');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('s_guna');
            $table->integer('s_persil');
            $table->integer('jml_penghuni');
            $table->string('no_ktp');
            $table->string('no_npwp');
            $table->integer('luas_persil');
            $table->string('crt_userid');
            $table->date('crt_tgl');
            $table->string('upd_userid');
            $table->date('upd_tgl');
            $table->integer('j_pekerja');
            $table->string('email');
            $table->integer('kd_tagih');
            $table->integer('periode_bayar');
            $table->string('kd_wilayah');
            $table->string('kd_sl');
            $table->string('no_rumah');
            $table->string('jalan_pasang');
            $table->string('kd_jalan');
            $table->integer('tipe_standar');
            $table->string('map_lat');
            $table->string('map_long');
            $table->string('kd_cabang');
            $table->string('foto_ktp');
            $table->string('foto_rek');
            $table->string('npa_tetangga');
            $table->integer('s_guna_al');
            $table->string('no_bonmeter');
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
