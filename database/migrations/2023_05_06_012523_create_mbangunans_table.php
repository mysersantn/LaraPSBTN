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
        Schema::create('mbangunans', function (Blueprint $table) {
            $table->id();
            $table->string('kd_bangunan');
            $table->string('kd_tarif');
            $table->string('keterangan');
            $table->string('luas_bangunan');
            $table->string('crt_userid');
            $table->bigInteger('upd_userid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbangunans');
    }
};
