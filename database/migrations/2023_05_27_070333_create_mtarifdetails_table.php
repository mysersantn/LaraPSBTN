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
        Schema::create('mtarifdetails', function (Blueprint $table) {
            $table->id();
            $table->string('kd_tarif',2);
            $table->date('eff_tgl');
            $table->string('max_m3');
            $table->float('rp_m3');
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
        Schema::dropIfExists('mtarifdetails');
    }
};
