<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->id();
            $table->string('rol');
            $table->string('email')->unique();
            $table->string('hash');
            $table->string('auth')->nullable();
            $table->boolean('block');
            $table->string('name');
            $table->string('userName');
            $table->string('creditcard')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
