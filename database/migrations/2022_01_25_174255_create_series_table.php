<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string("serie_name");
        });

        Schema::table('movies', function (Blueprint $table) {
            $table->unsignedBigInteger('serie_id')->nullable();
            //$table->foreignId("serie_id")->nullable();
            $table->foreign('serie_id')->references('id')->on('series');
            $table->integer("episodio")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn("episodio");
            $table->dropColumn("serie_id");
        });
        Schema::dropIfExists('series');
    }
}
