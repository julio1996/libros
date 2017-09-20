<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLibros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_proveedores')->unsigned();
            $table->foreign('id_proveedores')->references('id')->on ('proveedores');
            $table->string('descripcion', 100);
            $table->string('autor', 100);
            $table->string('editorial', 100);
            $table->string('genero', 100);
            $table->string('tipo', 50);
            $table->float('precio', 4, 2);
            $table->string('isbn', 50);
            $table->date('fecha_emision', 10);
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
