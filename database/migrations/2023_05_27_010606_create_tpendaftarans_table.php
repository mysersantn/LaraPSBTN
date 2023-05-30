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
            $table->string('kd_daftar',15);
            $table->datetime('tgl_daftar');
            $table->string('s_daftar',2);
            $table->string('j_daftar',2);
            $table->string('pemohon',50);
            $table->string('almt_pemohon',200);
            $table->string('no_telp_pemohon',16);
            $table->string('pemilik',50);
            $table->string('almt_pasang',200);
            $table->string('no_hp',16);
            $table->string('no_telp',16);
            $table->string('kd_pos',6);
            $table->string('kd_prop',2);
            $table->string('kd_kab',2);
            $table->string('kd_kel',3);
            $table->string('kd_kec',3);
            $table->string('rt',4);
            $table->string('rw',4);
            $table->string('s_guna',2);
            $table->string('s_persil',2);
            $table->string('jml_penghuni',2);
            $table->string('no_ktp',17);
            $table->string('no_npwp',17);
            $table->string('luas_persil');
            // $table->datetime('crt_tgl');
            // $table->datetime('upd_tgl');
            $table->string('j_pekerjaan',2);
            $table->string('email',60);
            $table->string('kd_tagih',4);
            $table->string('periode_bayar',2);
            $table->string('kd_wilayah',4);
            $table->string('kd_sl',20);
            $table->string('no_rumah',4);
            $table->string('jalan_pasang',200);
            $table->string('kd_jalan',10);
            $table->string('tipe_standar');
            $table->string('map_lat');
            $table->string('map_long');
            $table->string('kd_cabang',2);
            $table->string('foto_ktp',255);
            $table->string('foto_rek',255);
            $table->string('npa_tetangga',10);
            $table->string('s_guna_al');
            $table->string('no_bonmeter',10);
            $table->string('crt_userid');
            $table->string('upd_userid');
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
