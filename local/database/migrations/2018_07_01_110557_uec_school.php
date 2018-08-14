<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UecSchool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uec_school', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_code');
            $table->string('school_name');
            $table->string('school_slug');
            $table->string('school_logo');
            $table->string('school_address');
            $table->string('school_email');
            $table->string('school_phone');
            $table->string('school_web');
            $table->longtext('school_describe');
            $table->boolean('school_tick')->nullable();
            $table->tinyInteger('school_status')->nullable();
            

            $table->integer('area_id')->unsigned();
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
        Schema::dropIfExists('uec_school');
    }
}
