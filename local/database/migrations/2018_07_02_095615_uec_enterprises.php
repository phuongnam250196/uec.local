<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UecEnterprises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uec_enterprises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enterprise_name');
            $table->string('enterprise_full_name');
            $table->string('enterprise_slug');
            $table->string('enterprise_logo');
            $table->integer('enterprise_size');
            $table->string('enterprise_address');
            $table->integer('enterprise_tax_code');
            $table->string('enterprise_email');
            $table->string('enterprise_phone');
            $table->string('enterprise_web');
            $table->longtext('enterprise_describe');
            $table->boolean('enterprise_tick');
            $table->tinyInteger('enterprise_status');
            

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
        Schema::dropIfExists('uec_enterprises');
    }
}
