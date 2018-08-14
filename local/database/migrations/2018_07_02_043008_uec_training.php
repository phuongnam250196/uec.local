<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UecTraining extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uec_training', function (Blueprint $table) {
            $table->increments('id');
            $table->string('training_name');
            $table->string('training_slug');
            $table->string('training_img');
            $table->string('training_amount_student');
            $table->string('training_timeserving');
            $table->string('training_deadline');
            $table->string('training_address');
            $table->longtext('training_describe');
            $table->boolean('training_tick')->nullable();
            $table->tinyInteger('training_status')->nullable();

            $table->integer('area_id')->unsigned();
            $table->integer('skill_id')->unsigned();
            $table->integer('enterprise_id')->unsigned();

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
        Schema::dropIfExists('uec_training');
    }
}
