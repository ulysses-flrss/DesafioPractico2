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
        Schema::create('clients', function (Blueprint $table) {
            $table->id(); // ID del cliente
            $table->string('name'); // Nombre del Cliente
            $table->string('last_name'); // Apellidos del Cliente
            $table->string('email')->unique(); // Correo del Cliente
            $table->string('password'); // Contraseña del Cliente
            $table->string('state'); // Estado del cliente (habilitado/deshabilitado)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
