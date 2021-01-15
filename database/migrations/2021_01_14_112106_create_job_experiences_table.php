<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->date('startedAt');
            $table->boolean('actualJob');
            $table->date('endedAt');
            $table->string('description');
            $table->string('role');
            $table->integer('id_curriculum')->unsigned();
            $table->timestamps();
        });
        Schema::table('job_experiences', function(Blueprint $table){
            $table->foreign('id_curriculum')->references('id')->on('curriculums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_experiences');
    }
}
