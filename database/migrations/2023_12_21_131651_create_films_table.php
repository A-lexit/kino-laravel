<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('slug')->unique();
            $table->string('origin_title')->nullable();
            $table->string('duration')->nullable();
            $table->text('other_actor')->nullable();
            $table->text('note')->nullable();
            $table->longText('description')->nullable();

            $table->bigInteger('author_id')->unsigned()->nullable();

            $table->integer('category_id')->unsigned()->nullable();      // те саме: $table->integer('category_id, false, true');    false - поле не автоінкрементоване, true - unsigned(
            /*$table->integer('director_id')->unsigned();*/
            $table->integer('year_id')->unsigned()->nullable();
            /*$table->integer('company_id')->unsigned();*/
            $table->integer('season_id')->unsigned()->nullable();
            $table->integer('rating_id')->unsigned()->nullable();
            /*$table->integer('composer_id')->unsigned();*/
            $table->integer('status_id')->unsigned()->nullable();
            $table->integer('age_id')->unsigned()->nullable();
            $table->integer('quality_id')->unsigned()->nullable();
            $table->integer('duration_id')->unsigned()->nullable();
            /*$table->integer('watch_id')->unsigned();*/
            $table->integer('view')->unsigned()->default(0);
            $table->string('thumbnail')->nullable();

            $table->integer('statuss')->default(0);    //Чернетка
            $table->integer('is_featured')->default(0);  //Обрані пости

            $table->foreign('author_id')->references('id')->on('users');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
