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
        Schema::create('mdsmls', function (Blueprint $table) {
            $table->id();
            $table->string('kd_cabang',2);
            $table->string('kd_wilayah',2);
            $table->string('kd_jalan',2);
            $table->string('kd_kelasjalan');
            $table->string('nm_jalan',100);
            $table->string('kd_kel',3);
            $table->string('kd_kec',3);
            $table->string('kd_kab',2);
            $table->string('kd_prop',2);
            $table->string('parent_jalan',7);
            $table->string('crt_userid');
            $table->string('upd_userid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mdsmls');
    }
};
