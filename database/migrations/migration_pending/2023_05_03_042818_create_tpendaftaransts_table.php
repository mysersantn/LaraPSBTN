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
        Schema::create('tpendaftaransts', function (Blueprint $table) {
            $table->string('kd_daftar');
            $table->integer('s_daftar');
            $table->string('ket_status');
            $table->string('crt_userid');
            $table->date('crt_tgl');
            $table->string('upd_userid');
            $table->date('upd_tgl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpendaftaransts');
    }
};
