<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Project extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamp('start');
            $table->timestamp('end');
            $table->unsignedInteger('production_id'); //create a foreign key column to be able to reference later
            $table->timestamps();
            $table->foreign('production_id')->references('id')->on('production')->onDelete('cascade'); // add a reference to external table id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
