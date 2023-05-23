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
            $table->id();
            $table->string('kd_prop',2);
            $table->string('kd_kab',2);
            $table->string('kd_kec',3);
            $table->string('kd_kel',3);
            $table->string('kelurahan');
            $table->string('kd_wilayah');
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
        Schema::dropIfExists('rkelurahans');
    }
};
