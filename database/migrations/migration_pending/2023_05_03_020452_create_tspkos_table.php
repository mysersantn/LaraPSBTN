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
        Schema::create('tspkos', function (Blueprint $table) {
            $table->string('kd_spko')->primary();
            $table->string('spko_userid');
            $table->string('no_spko');
            $table->date('tgl_spko');
            $table->integer('jns_spko');
            $table->string('pemilik');
            $table->string('almt_pasang');
            $table->string('no_telp');
            $table->integer('luas_persil');
            $table->string('crt_userid');
            $table->date('crt_tgl');
            $table->integer('jmlh_penghuni');
            $table->date('tgl_daftar');
            $table->string('kd_blok');
            $table->integer('queue_exception');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tspkos');
    }
};
