<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLideresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lideres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('lugar');
            $table->string('imagen');
            $table->timestamps();

            $table->unsignedBigInteger('medalla_id');

            $table->foreign('medalla_id')->references('id')->on('medallas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lideres');
    }
}
