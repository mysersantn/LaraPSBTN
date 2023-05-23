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
        Schema::create('rjabatans', function (Blueprint $table) {
            $table->id();
            $table->string('kd_jabatan',2);
            $table->string('jabatan');
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
        Schema::dropIfExists('rjabatans');
    }
};
