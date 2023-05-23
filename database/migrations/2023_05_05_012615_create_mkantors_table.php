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
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('nm_kepala');
            $table->string('nip_kepala');
            $table->string('j_kantor');
            $table->integer('s_open');
            $table->string('kd_cabang');
            $table->string('tgl_buka');
            $table->string('inisial');
            $table->integer('target_pertahun');
            $table->bigInteger('crt_userid');
            $table->bigInteger('upd_userid');
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
