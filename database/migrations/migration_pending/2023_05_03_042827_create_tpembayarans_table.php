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
        Schema::create('tpembayarans', function (Blueprint $table) {
            $table->string('no_bukti');
            $table->string('no_tagihan');
            $table->string('pemilik');
            $table->integer('kd_wilayah');
            $table->string('gol_tarif');
            $table->integer('kd_channel');
            $table->date('tgl_bayar');
            $table->integer('kd_bayar');
            $table->integer('jml_admin');
            $table->integer('jml_bpma');
            $table->integer('jml_cicilan');
            $table->integer('jml_denda');
            $table->integer('jml_materai');
            $table->integer('jml_tagihan');
            $table->integer('jml_bayar');
            $table->string('kd_pelanggan');
            $table->string('crt_userid');
            $table->date('crt_tgl');
            $table->bigInteger('upd_userid')->nullable();
            $table->date('upd_tgl');
            $table->string('kode_bank');
            $table->string('s_bayar');
            $table->string('rev_reason');
            $table->date('tgl_verifikasi');
            $table->string('s_verifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpembayarans');
    }
};
