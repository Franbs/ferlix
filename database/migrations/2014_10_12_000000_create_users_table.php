<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //$table->id();//
            $table->increments('id');
            $table->string('name');
            $table->string('userName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('rol');
            $table->string('auth');
            $table->boolean('block');
            $table->string('creditcard');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
