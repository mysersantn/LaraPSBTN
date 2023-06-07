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
        Schema::create('tsurveys', function (Blueprint $table) {
            $table->string('kd_survey')->primary();
            $table->date('tgl_survey');
            $table->integer('s_survey');
            $table->string('no_spko');
            $table->string('kd_daftar');
            $table->integer('jml_penghuni');
            $table->integer('s_persil');
            $table->integer('luas_persil');
            $table->integer('diameter_pipa');
            $table->string('gps_lat');
            $table->string('gps_long');
            $table->string('foto_name');
            $table->bigInteger('upd_userid')->nullable();
            $table->string('ket_survey');
            $table->string('nip_surveyor');
            $table->date('upd_tgl');
            $table->string('crt_userid');
            $table->date('crt_tgl');
            $table->integer('panjang_pipa');
            $table->string('kd_wilayah');
            $table->string('kd_jalan');
            $table->string('foto');
            $table->integer('kd_tarif');
            $table->integer('stts_verifikasi');
            $table->string('msg_verifikasi');
            $table->string('s_pipa');
            $table->integer('sguna_al');
            $table->integer('s_guna');
            $table->string('ukuran_meter');
            $table->string('no_phs');
            $table->float('press_air');
            $table->integer('penghasilan');
            $table->string('kd_sl');
            $table->integer('tunggakan');
            $table->integer('kasus');
            $table->string('no_baseline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsurveys');
    }
};
