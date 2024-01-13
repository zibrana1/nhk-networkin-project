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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('NomProduit');
            $table->string('image');
            $table->float('PrixUnitaire');
            $table->float('quantiteStock');
            $table->date('DateEngis')->nullable();
            $table->text('caracteristique');
            $table->bigInteger('id_categorie');
            $table->timestamps();
            $table->foreign("id_categorie")->references('id')->on('categories')->delete("cascade");
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
