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
        Schema::disableForeignKeyConstraints();
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('path');
            $table->foreignId('tuteur_id')->references('id')->on('tuteurs')->onDelete('cascade');
            $table->foreignId('ville_id')->references('id')->on('villes')->onDelete('cascade');
            $table->foreignId('nationalite_id')->references('id')->on('nationalites')->onDelete('cascade');
            $table->foreignId('groupe_sanguin_id')->references('id')->on('groupe_sanguins')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
        
    }
};
