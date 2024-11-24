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
        Schema::create('populars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_musica')->constrained('musicas')->onDelete('cascade')->onUpdate('no action'); 
            $table->foreignId('id_artista')->constrained('artistas')->onDelete('cascade')->onUpdate('no action'); 
            $table->foreignId('id_album')->constrained('albums')->onDelete('cascade')->onUpdate('no action'); 
            $table->foreignId('id_genero')->constrained('generos')->onDelete('cascade')->onUpdate('no action'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('populars');
    }
};