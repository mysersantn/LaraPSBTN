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
        Schema::create('tgantimeters', function (Blueprint $table) {
            $table->date('tgl_pasang');
            $table->string('kd_pelanggan');
            $table->string('no_bapp');
            $table->string('merk_lama');
            $table->string('merk_baru');
            $table->string('nomor_lama');
            $table->string('nomor_baru');
            $table->integer('stand_angkat');
            $table->integer('stand_akhir');
            $table->integer('stand_awal');
            $table->string('nomor_tera');
            $table->integer('diameter');
            $table->string('keterangan');
            $table->string('crt_userid');
            $table->date('crt_tgl');
            $table->string('apv_userid');
            $table->date('apv_tgl');
            $table->string('photo');
            $table->string('gps_lat');
            $table->string('gps_long');
            $table->integer('apv_status');
            $table->string('photo_pasang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tgantimeters');
    }
};
