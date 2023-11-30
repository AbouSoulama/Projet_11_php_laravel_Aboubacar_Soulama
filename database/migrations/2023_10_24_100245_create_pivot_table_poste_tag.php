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
        Schema::create('poste_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('poste_id')->constrauned()->onDelete('cascade');
            $table->foreignId('tag_id')->constrauned()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_table_poste_tag');
    }
};
