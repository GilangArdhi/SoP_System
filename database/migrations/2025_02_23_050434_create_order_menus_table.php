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
        Schema::create('order_menus', function (Blueprint $table) {
            $table->id(); // Kolom primary key auto increment
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');// Kolom foreign key auto increment
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');// Kolom foreign key auto increment
            $table->string('product_name'); // Nama Produk
            $table->decimal('price', 10, 2); // Harga produk pcs
            $table->integer('quantity'); // Jumlah produk yang dipesan
            $table->decimal('subtotal', 10, 2); // price * quantity, bisa dihitung secara dinamis
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_menus');
    }
};
