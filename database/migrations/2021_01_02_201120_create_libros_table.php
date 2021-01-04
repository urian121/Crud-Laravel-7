<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->integer('isbn');
            $table->unsignedBigInteger('editoriales_id')->default(10)->unsigned();
            $table->foreign('editoriales_id')->references('id')->on('editoriales');
            $table->string('titulo',45)->nullable();
            $table->text('sinopsis')->nullable();
            $table->string('n_paginas',45)->nullable();
            $table->string('portada',50)->nullable();
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
        Schema::dropIfExists('libros');
    }
}
