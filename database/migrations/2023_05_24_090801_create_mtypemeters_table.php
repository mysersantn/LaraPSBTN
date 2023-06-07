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
        Schema::create('mtypemeters', function (Blueprint $table) {
            $table->id();
            $table->string('kd_typemeter');
            $table->string('ket_meter');
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
        Schema::dropIfExists('mtypemeters');
    }
};
