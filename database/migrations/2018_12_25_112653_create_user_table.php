<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * the code will create a table with the name 'user'
     * each $table->columnType invocatoin will create a column with specified type and property
     * one line matches to one column
     * each method such as string/timestamp/increments coresponds to a specific mysql query
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user', function (Blueprint $table) {
               $table->increments('id'); // automatically create a primary key | unique id with long int type [ large integer values ]
               $table->string('name'); // create column with name with type string .. and so on ..
               $table->string('email')->unique();
               $table->timestamp('verified')->nullable();
               $table->string('password');
               $table->rememberToken();
               $table->timestamp('created')->nullable();
               $table->timestamp('updated')->nullable();
               $table->timestamp('deleted')->nullable();
               $table->foreign('roleId')->references('id')->on('role'); // add a reference to external table id
           });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
