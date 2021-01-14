<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumsKnowledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums_knowledges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_knowledges')->unsigned();
            $table->integer('id_curriculums')->unsigned();
            $table->integer('yearsOfExperience');
            $table->timestamps();
        });

        Schema::table('curriculums_knowledges', function (Blueprint $table) {
            $table->foreign('id_knowledges')->references('id')->on('knowledges')->onDelete('cascade');
            $table->foreign('id_curriculums')->references('id')->on('curriculums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculums_knowledges');
    }
}
