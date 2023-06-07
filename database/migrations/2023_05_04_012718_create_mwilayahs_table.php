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
            $table->id();
            $table->string('kd_wilayah',4);
            $table->string('kd_cabang',2);
            $table->string('nm_wilayah');
            $table->string('ket_wilayah')->nullable();
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
        Schema::dropIfExists('mwilayahs');
    }
};
