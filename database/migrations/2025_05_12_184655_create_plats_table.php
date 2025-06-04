<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the 
     * migrations.
     */
    public function up(): void
    {
        Schema::create('plats', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("image");
            $table->string("description");
            $table->decimal("prix",8,2);
            $table->string("stock");
            $table->enum('statut', ['disponible', 'indisponible'])->default('disponible');
            $table->foreignId('categories_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plats');
    }
};
