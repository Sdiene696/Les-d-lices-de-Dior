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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('plats_id')->constrained();
            $table->enum('typecommande', ['livraison', 'à emporter'])->default('livraison');
            $table->integer("total")->nullable();
            $table->text("stripe_id")->nullable();
            $table->enum('statut', ['payé', 'impayé'])->default('payé');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
