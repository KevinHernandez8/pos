<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTipoDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_documento', function (Blueprint $table) {
            $table->integerIncrements('tipo_documento_id')->comment('Identificador del tipo de documento');
            $table->string('nombre', 50)->comment('Nombre del tipo de documento');
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
        Schema::dropIfExists('tipo_documento');
    }
}
