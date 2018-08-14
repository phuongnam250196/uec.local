<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UecRecruitment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uec_recruitment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recruitment_name');
            $table->string('recruitment_slug');
            $table->string('recruitment_img');
            $table->string('recruitment_salary'); //tiền lương
            $table->string('recruitment_amount'); //số lượng
            $table->string('recruitment_age'); //độ tuổi
            $table->tinyInteger('recruitment_gender');
            $table->string('recruitment_deadline'); // hạn nộp
            $table->boolean('recruitment_tick')->nullable();
            $table->tinyInteger('recruitment_status')->nullable();
            $table->longtext('recruitment_describe');
            $table->longtext('recruitment_benefit');
            $table->longtext('recruitment_requirements');

            $table->integer('area_id')->unsigned();
            $table->integer('yearofexp_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->integer('education_id')->unsigned();
            $table->integer('formality_id')->unsigned();
            $table->integer('career_id')->unsigned();

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
        Schema::dropIfExists('uec_recruitment');
    }
}
