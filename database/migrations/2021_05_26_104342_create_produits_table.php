<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id_produit');
            $table->string('libelle');
            $table->text('description');
            $table->string('stock');
            $table->string('image');
            $table->foreignId('id_categorie')->constrained('categorie'); /*pour gerer les clés etrangère*/
            $table->string('prix_vente');
            $table->string('prix_achat');
            $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
