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
        Schema::create('mtarifs', function (Blueprint $table) {
            $table->id();
            $table->string('kd_tarif',2);
            $table->string('golongan_tarif',8);
            $table->string('kd_kelompok',2);
            $table->string('descr',60)->nullable();
            $table->string('gol_tarifgis',60);
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
        Schema::dropIfExists('mtarifs');
    }
};
