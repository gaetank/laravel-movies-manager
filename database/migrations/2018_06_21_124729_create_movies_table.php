<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('age');
            $table->timestamps();
        });
        
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->integer('prix');
            $table->longText('trailer');
            $table->timestamps();
        });
        
        Schema::create('ass_realisator_movies', function (Blueprint $table) {
            $table->unsignedInteger('id_realisator');
            $table->unsignedInteger('id_movies');
            $table->foreign('realisator_id')->references('id')->on('realisators');
            $table->foreign('id_movies')->references('id')->on('movies');
            $table->timestamps();
        });
        
        Schema::create('ass_category_movies', function (Blueprint $table) {
            $table->unsignedInteger('id_category');
            $table->unsignedInteger('id_movies');
            $table->foreign('id_category')->references('id')->on('category');
            $table->foreign('id_movies')->references('id')->on('movies');
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
        Schema::dropIfExists('realisators');
        Schema::dropIfExists('category');
        Schema::dropIfExists('movies');
        Schema::dropIfExists('ass_category_movies');
        Schema::dropIfExists('ass_realisator_movies');
    }
}
