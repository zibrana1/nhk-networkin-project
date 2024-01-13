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
        Schema::create('ligne_commandes', function (Blueprint $table) {
            $table->id();
            $table->string('NomProduit');
            $table->integer("Qte");
            $table->float('PrixVenteUnitaire');
            $table->date('DateVente');
            $table->float("remise")->nullable();
            $table->date('DateEngis')->nullable();
            $table->bigInteger('id_produit');
            $table->timestamps();
            //$table->foreign('id_commande')->references("id")->on("commandes")->onDelete("cascade");
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_commandes');
    }
};
