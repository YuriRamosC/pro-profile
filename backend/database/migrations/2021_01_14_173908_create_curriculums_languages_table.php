<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumsLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_languages')->unsigned();
            $table->integer('id_curriculums')->unsigned();
            $table->string('level');
            $table->timestamps();
        });
        Schema::table('curriculums_languages', function(Blueprint $table) {
            $table->foreign('id_languages')->references('id')->on('languages')->onDelete('cascade');
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
        Schema::dropIfExists('curriculums_languages');
    }
}
