<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecideursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decideurs', function (Blueprint $table) {
            $table->increments('idd_decideur');
            $table->string('nom');
            $table->string('prenom');
            $table->float('telephone');
            $table->string('email');
            $table->string('mode_paiement');
            $table->string('login');
            $table->string('password');
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
        Schema::dropIfExists('decideurs');
    }
}
