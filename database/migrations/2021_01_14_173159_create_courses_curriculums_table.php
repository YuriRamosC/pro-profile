<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_curriculums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_courses')->unsigned();
            $table->integer('id_curriculums')->unsigned();
            $table->integer('duration'); //horas
            $table->date('finishedAt');
            $table->timestamps();
        });

        Schema::table('courses_curriculums', function(Blueprint $table) {
            $table->foreign('id_courses')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('courses_curriculums');
    }
}
