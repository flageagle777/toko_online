<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name', 100); // Nama barang
            $table->decimal('price', 10, 2); // Harga barang
            $table->integer('quantity')->default(0); // Jumlah barang
            $table->enum('type', ['electronic', 'furniture', 'food', 'clothing']); // Tipe barang
            $table->text('description')->nullable(); // Deskripsi barang
            $table->string('sku', 50)->unique(); // Stock Keeping Unit (kode unik barang)
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
