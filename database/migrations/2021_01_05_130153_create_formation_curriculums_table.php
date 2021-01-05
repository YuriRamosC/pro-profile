<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_curriculums', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id_curriculum')->references('id')->on('curriculums')->onDelete('cascade');
            $table->foreign('id_formation')->references('id')->on('formations')->onDelete('cascade');
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
        Schema::dropIfExists('formation_curriculums');
    }
}
