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
        Schema::create('tpenelitians', function (Blueprint $table) {
            $table->string('kd_penelitian')->primary();
            $table->date('tgl_survey');
            $table->string('lbr_jalan');
            $table->string('s_parit');
            $table->string('s_eko');
            $table->string('s_airsumur');
            $table->string('s_air');
            $table->date('upd_tgl');
            $table->string('crt_userid');
            $table->date('crt_tgl');
            $table->string('kondisi_rumah');
            $table->string('tekanan_rumah');
            $table->string('s_aliran');
            $table->string('kondisi_jalan');
            $table->string('s_pipa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpenelitians');
    }
};
