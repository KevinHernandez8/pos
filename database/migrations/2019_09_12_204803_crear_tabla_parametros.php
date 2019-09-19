<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaParametros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->integerIncrements('parametros_id')->comment('Identificador del parámetro');
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nombre_establecimiento', 128)->comment('Nombre del establecimiento comercial o persona encargada');
            $table->unsignedInteger('tipo_documento_id');
            $table->foreign('tipo_documento_id')->references('tipo_documento_id')->on('tipo_documento')->onDelete('cascade')->comment('Tipo de documento del establecimiento comercial o persona encargada');
            $table->string('numero_documento', 50)->comment('Número de documento del establecimiento/persona encargada');
            $table->unsignedInteger('departamento_id');
            $table->foreign('departamento_id')->references('departamento_id')->on('departamento')->onDelete('cascade');
            $table->unsignedInteger('ciudad_id');
            $table->foreign('ciudad_id')->references('ciudad_id')->on('ciudad')->onDelete('cascade');
            $table->string('direccion', 128)->comment('Dirección de ubicación del establecimiento');
            $table->string('telefono', 20)->comment('Teléfono o celular del establecimiento/persona encargada');
            $table->char('activo', 1)->default('S')->comment('Define si está activo o no. S = Si, N = No');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros');
    }
}
