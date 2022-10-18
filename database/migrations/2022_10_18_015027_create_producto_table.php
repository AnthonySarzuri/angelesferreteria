<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCategoria');
            $table->unsignedBigInteger('idImagen');
            $table->unsignedBigInteger('idUsuario');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->double('precio');
            $table->timestamps();

            $table->foreign('idCategoria')->references('id')->on('categoria');
            $table->foreign('idImagen')->references('id')->on('imagenes');
            $table->foreign('idUsuario')->references('id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
