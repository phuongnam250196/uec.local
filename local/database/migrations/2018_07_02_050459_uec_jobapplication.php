<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UecJobapplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uec_jobapplication', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jobapplication_name');
            $table->string('jobapplication_slug');
            $table->string('jobapplication_salary'); //lương
            $table->string('jobapplication_purpose'); // mục tiêu
            $table->string('jobapplication_transcript'); //bảng điểm
            
            $table->boolean('jobapplication_tick')->nullable();
            $table->tinyInteger('jobapplication_status')->nullable();
            

            $table->integer('area_id')->unsigned();

            $table->integer('career_id')->unsigned();

            $table->integer('education_id')->unsigned();

            $table->integer('yearofexp_id')->unsigned();

            $table->integer('formality_id')->unsigned();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('uec_jobapplication');
    }
}
