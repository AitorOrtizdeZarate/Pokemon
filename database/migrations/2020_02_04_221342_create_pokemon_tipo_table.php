<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon_tipo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pokemon_id');
            $table->unsignedBigInteger('tipo_id');
            $table->timestamps();

            $table->foreign('pokemon_id')->references('id')->on('pokemon');
            $table->foreign('tipo_id')->references('id')->on('tipos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon_tipo');
    }
}
