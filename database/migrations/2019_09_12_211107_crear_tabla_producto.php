<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->integerIncrements('producto_id')->comment('Identificador del producto');
            $table->string('nombre', 128)->comment('Nombre del producto');
            $table->unsignedInteger('categoria_id');
            $table->foreign('categoria_id')->references('categoria_id')->on('categoria')->onDelete('cascade');
            $table->string('imagen')->nullable()->comment('Nombre/ruta de la imagen del producto');
            $table->string('descripcion')->nullable()->comment('Descripción del producto');
            $table->integer('cantidad')->comment('Cantidad en inventario del producto');
            $table->string('codigo_barras')->nullable()->comment('Número del código de barras del producto');
            $table->char('activo', 1)->default('S')->comment('Define si está activo o no. S = Si, N = No');            
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
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
}
