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
        Schema::create('tpemasangans', function (Blueprint $table) {
            $table->string('no_spkp')->primary();
            $table->string('kd_daftar');
            $table->string('kd_pemasang');
            $table->date('tgl_pasang');
            $table->integer('kd_pasang');
            $table->string('no_bap');
            $table->string('crt_userid');
            $table->date('crt_tgl');
            $table->bigInteger('upd_userid')->nullable();
            $table->date('upd_tgl');
            $table->string('kd_wilayah');
            $table->string('kd_jalan');
            $table->string('kd_standmeter');
            $table->integer('kd_kelasjalan');
            $table->integer('kd_tarif');
            $table->string('no_tera');
            $table->string('merk_standmeter');
            $table->string('kd_sl');
            $table->string('angka_meter');
            $table->string('keterangan');
            $table->integer('s_pemasangan');
            $table->string('ukuran_meter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpemasangans');
    }
};
