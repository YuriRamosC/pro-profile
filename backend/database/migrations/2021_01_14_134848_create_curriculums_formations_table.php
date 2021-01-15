<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumsFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums_formations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_curriculums')->unsigned();
            $table->integer('id_formations')->unsigned();
            $table->integer('yearConclusion');
            $table->boolean('isConcluded');
            $table->integer('yearStarted');
            $table->timestamps();
        });

        Schema::table('curriculums_formations', function(Blueprint $table) {
            $table->foreign('id_curriculums')->references('id')->on('curriculums')->onDelete('cascade');
            $table->foreign('id_formations')->references('id')->on('formations')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculums_formations');
    }
}
