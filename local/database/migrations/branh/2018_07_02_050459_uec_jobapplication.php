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
            $table->increments('jobapplication_id');
            $table->string('jobapplication_name');
            $table->string('jobapplication_slug');
            $table->string('jobapplication_salary'); //lương
            $table->string('jobapplication_purpose'); // mục tiêu
            $table->string('jobapplication_transcript'); //bảng điểm
            
            $table->boolean('jobapplication_tick')->nullable();
            $table->tinyInteger('jobapplication_status')->nullable();
            

            $table->integer('jobapplication_area')->unsigned();
            $table->foreign('jobapplication_area')->references('area_id')->on('uec_area')->onDelete('cascade');

            $table->integer('jobapplication_career')->unsigned();
            $table->foreign('jobapplication_career')->references('career_id')->on('uec_career')->onDelete('cascade');

            $table->integer('jobapplication_education')->unsigned();
            $table->foreign('jobapplication_education')->references('education_id')->on('uec_education')->onDelete('cascade');

            $table->integer('jobapplication_yearofexp')->unsigned();
            $table->foreign('jobapplication_yearofexp')->references('yearofexp_id')->on('uec_yearofexp')->onDelete('cascade');

            $table->integer('jobapplication_formality')->unsigned();
            $table->foreign('jobapplication_formality')->references('formality_id')->on('uec_formality')->onDelete('cascade');

            $table->integer('jobapplication_user')->unsigned();
            $table->foreign('jobapplication_user')->references('user_id')->on('uec_user')->onDelete('cascade');
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
