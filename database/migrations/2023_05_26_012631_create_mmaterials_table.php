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
        Schema::create('mmaterials', function (Blueprint $table) {
            $table->id();
            $table->string('kd_material',10);
            $table->string('material',100);
            $table->string('satuan',50);
            $table->string('ukuran',100);
            $table->float('harga');
            $table->string('is_default');
            $table->string('jml',50);
            $table->string('posisi',60);
            $table->string('jenis');
            $table->string('invest');
            $table->string('crt_userid')->nullable();
            $table->bigInteger('upd_userid')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mmaterials');
    }
};
