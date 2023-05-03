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
        // Creación de la tabla productos 'products'
        Schema::create('products', function (Blueprint $table) {
            $table->string('id')->primary(); // ID del producto (PROD#####)
            $table->string('name'); // Nombre del Producto
            $table->string('description'); // Descripción del Producto
            $table->string('img'); // Ruta de la imagen del producto (.jpg, .png)
            $table->unsignedBigInteger('category'); // Categoría del producto
            $table->float('price'); // Precio del producto
            $table->integer('stock'); // Existencias del producto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
