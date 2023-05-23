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
        Schema::create('rkabupatens', function (Blueprint $table) {
            $table->id();
            $table->string('kd_prop',2);
            $table->string('kd_kab',2);
            $table->string('kabupaten');
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
        Schema::dropIfExists('rkabupatens');
    }
};
