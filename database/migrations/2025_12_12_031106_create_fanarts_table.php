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
        Schema::create('fanarts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuarios_id')->constrained();
            $table->foreignId('categorias_id')->constrained();
            $table->string('nombre_arte');
            $table->string('picture');
            $table->string('descripcion');
            $table->enum('estado',['Activo','Inactivo','Suspenso']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fanarts');
    }
};
