<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoresHasLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autores_libros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('autores_id') // UNSIGNED BIG INT
                ->references('id')
                ->on('autores');

            $table->foreignId('libros_isbn') // UNSIGNED BIG INT
            ->references('id')
            ->on('users');
          
/*
            $table->unsignedInteger('autores_id'); 
            $table->foreign('autores_id')->references('id')->on('autores');

            $table->unsignedInteger('libros_isbn'); 
            $table->foreign('libros_isbn')->references('isbn')->on('libros');
*/
            /* $table->unsignedBigInteger('autores_id')->nullable()->default(10)->unsigned();
            $table->foreign('autores_id')->references('id')->on('autores')->onDelete('cascade'); */
            //$table->foreign('autores_id')->references('id')->on('autores');

           /* $table->unsignedBigInteger('libros_isbn')->default(13)->unsigned()->nullable();
            $table->foreign('libros_isbn')->references('isbn')->on('libros')->onDelete('cascade');*/

            //$table->foreign('libros_isbn')->references('isbn')->on('libros');
            //$table->foreign('libros_isbn')->references('isbn')->on('libros')->onDelete('cascade');

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
        Schema::dropIfExists('autores_has_libros');
    }
}
