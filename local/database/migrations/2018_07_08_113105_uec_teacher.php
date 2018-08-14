<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UecTeacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uec_teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacher_name');
            $table->string('teacher_slug');
            $table->string('teacher_img');
            $table->date('teacher_birthday');
            $table->string('teacher_email');
            $table->string('teacher_phone');
            $table->string('teacher_science');
            $table->string('teacher_address');
            $table->boolean('teacher_tick');
            $table->tinyInteger('teacher_status');
            

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
        Schema::dropIfExists('uec_teacher');
    }
}
