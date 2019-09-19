<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCiudad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudad', function (Blueprint $table) {
            $table->integerIncrements('ciudad_id')->comment('Identificador de la ciudad');
            $table->unsignedInteger('departamento_id');
            $table->foreign('departamento_id')->references('departamento_id')->on('departamento')->onDelete('cascade');
            $table->string('nombre', 50)->comment('Nombre de la ciudad');
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
        Schema::dropIfExists('ciudad');
    }
}
