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
        Schema::create('mwilayahs', function (Blueprint $table) {
            $table->bigInteger('kd_wilayah');
            $table->bigInteger('kd_cabang');
            $table->string('nm_wilayah');
            $table->string('ket_wilayah');
            $table->bigInteger('upd_userid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mwilayahs');
    }
};
