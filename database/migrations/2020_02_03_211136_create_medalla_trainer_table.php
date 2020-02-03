<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedallaTrainerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medalla_trainer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('trainer_id');
            $table->unsignedBigInteger('medalla_id');
            $table->timestamps();

            $table->foreign('trainer_id')->references('id')->on('trainers');
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
        Schema::dropIfExists('medalla_trainer');
    }
}
