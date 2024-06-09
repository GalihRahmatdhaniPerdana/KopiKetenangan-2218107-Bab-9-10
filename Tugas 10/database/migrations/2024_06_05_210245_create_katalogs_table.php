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
        Schema::create('katalogs', function (Blueprint $table) {
            
            $table->id('id_katalog');
            $table->string('jenis_kopi',50);
            $table->string('grade',50);
            $table->string('nama',50);
            $table->string('asal',50);
            $table->integer('harga');
            $table->string('gambar', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalogs');
    }
};
