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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            // Otros campos de usuario como nombre, email, etc.
            $table->timestamps();
        });
        
        Schema::create('prendas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('estilo');
            $table->string('color1');
            $table->string('color2');
            $table->string('imagen', 400);
            $table->string('tipo');
            $table->double('precio');
            $table->string('genero');
            $table->timestamps();
        });
        
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('carrito_prenda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrito_id');
            $table->unsignedBigInteger('prenda_id');
            $table->foreign('carrito_id')->references('id')->on('carritos')->onDelete('cascade');
            $table->foreign('prenda_id')->references('id')->on('prendas')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('armarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('armario_prenda', function (Blueprint $table) {
            $table->unsignedBigInteger('armario_id');
            $table->unsignedBigInteger('prenda_id');
            $table->foreign('armario_id')->references('id')->on('armarios')->onDelete('cascade');
            $table->foreign('prenda_id')->references('id')->on('prendas')->onDelete('cascade');
            $table->primary(['armario_id', 'prenda_id']);
        });
        
        Schema::create('outfits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('outfit_prenda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('outfit_id');
            $table->unsignedBigInteger('prenda_id');
            $table->foreign('outfit_id')->references('id')->on('outfits')->onDelete('cascade');
            $table->foreign('prenda_id')->references('id')->on('prendas')->onDelete('cascade');
            $table->string('tipo'); // Para distinguir el tipo de prenda (arriba, pantalones, calzado)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
