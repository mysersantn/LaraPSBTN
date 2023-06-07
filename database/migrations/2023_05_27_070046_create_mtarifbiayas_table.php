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
        Schema::create('mtarifbiayas', function (Blueprint $table) {
            $table->id();
            $table->string('kd_tarif',2);
            $table->date('eff_tgl');
            $table->string('kd_biaya',2);
            $table->float('rp_biaya');
            $table->string('desc',60)->nullable();
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
        Schema::dropIfExists('mtarifbiayas');
    }
};
