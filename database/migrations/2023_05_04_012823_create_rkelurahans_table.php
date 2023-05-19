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
        Schema::create('rkelurahans', function (Blueprint $table) {
            $table->bigInteger('kd_prop');
            $table->bigInteger('kd_kab');
            $table->bigInteger('kd_kec');
            $table->bigInteger('kd_kel');
            $table->string('kelurahan');
            $table->bigInteger('kd_wilayah');
            $table->bigInteger('upd_userid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rkelurahans');
    }
};
