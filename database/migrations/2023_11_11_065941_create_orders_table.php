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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('email',100);
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->longtext('alamat');
            $table->bigInteger('no_telp');
            $table->string('pengiriman',50);
            $table->float('ongkir', 12, 2);
            $table->float('harga_beli', 12, 2);
            $table->float('harga_normal', 12, 2);
            $table->float('harga_jual', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
