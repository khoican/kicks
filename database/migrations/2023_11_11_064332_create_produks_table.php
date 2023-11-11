<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('brand_id')->constrained()->cascadeOnDelete();
            $table->string('nama_produk', 50);
            $table->longtext('deskripsi');
            $table->string('gambar_1', 50);
            $table->string('gambar_2', 50);
            $table->string('gambar_3', 50);
            $table->string('gambar_4', 50);
            $table->float('harga_beli');
            $table->float('harga_normal');
            $table->float('harga_jual');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
