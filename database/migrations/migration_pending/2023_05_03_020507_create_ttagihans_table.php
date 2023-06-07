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
        Schema::create('ttagihans', function (Blueprint $table) {
            $table->string('no_tagihan')->primary();
            $table->string('kd_pelanggan');
            $table->string('pemilik');
            $table->string('almt_pasang');
            $table->integer('kd_wilayah');
            $table->integer('no_thnbln');
            $table->integer('kd_tagihan');
            $table->date('tgl_tagih');
            $table->date('tgl_jatuhtempo');
            $table->string('kd_standmeter');
            $table->integer('s_tagihan');
            $table->string('gol_tarif');
            $table->date('tgl_baca');
            $table->integer('m3_awal');
            $table->integer('m3_akhir');
            $table->integer('jml_bpma');
            $table->integer('jml_admin');
            $table->integer('jml_rk');
            $table->integer('jml_materai');
            $table->integer('jml_cicilan');
            $table->integer('jml_denda');
            $table->integer('jml_tagihan');
            $table->string('ket_tagihan');
            $table->string('crt_userid');
            $table->date('crt_tgl');
            $table->bigInteger('upd_userid')->nullable();
            $table->date('upd_tgl');
            $table->integer('periode_baca');
            $table->integer('m3_detail1');
            $table->integer('m3_detail2');
            $table->integer('m3_detail3');
            $table->integer('m3_detail4');
            $table->integer('m3_biaya1');
            $table->integer('m3_biaya2');
            $table->integer('m3_biaya3');
            $table->integer('m3_biaya4');
            $table->integer('jml_retribusi');
            $table->integer('jml_ppn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttagihans');
    }
};
