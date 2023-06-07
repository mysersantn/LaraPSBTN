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
        Schema::create('mkantors', function (Blueprint $table) {
            $table->id();
            $table->string('kd_kantor');
            $table->string('kantor');
            $table->string('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('nm_kepala')->nullable();
            $table->string('nip_kepala')->nullable();
            $table->string('j_kantor')->nullable();
            $table->integer('s_open')->nullable();
            $table->string('kd_cabang')->nullable();
            $table->string('tgl_buka')->nullable();
            $table->string('inisial')->nullable();
            $table->integer('target_pertahun')->nullable();
            $table->bigInteger('crt_userid');
            $table->bigInteger('upd_userid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mkantors');
    }
};
