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
        Schema::create('_post', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            // creamos una columna en nuestra tabla que solo acepta numeros positivo y meramente numeros enteros 
            $table->foreign('user_id')->references('id')->on('users');
            // establecemos que la columna 'user_id' sera una foreign que hace referencia a la columna 'users' de la tabla 'users'
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    // revierte la migracion si existe algun conflicto 
    {
        Schema::dropIfExists('_post');
    }
};
