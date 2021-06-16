<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemarcheursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demarcheurs', function (Blueprint $table) {
            $table->increments('id_demarcheur');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->float('telephone');
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
        Schema::dropIfExists('demarcheurs');
    }
}
