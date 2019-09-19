<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEntidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidad', function (Blueprint $table) {
            $table->integerIncrements('entidad_id');
            $table->string('nombre', 128)->comment('Nombre completo del proveedor/cliente');
            $table->unsignedInteger('tipo_documento_id');
            $table->foreign('tipo_documento_id')->references('tipo_documento_id')->on('tipo_documento')->onDelete('cascade');
            $table->string('numero_documento', 50)->comment('Número de documento del proveedor/cliente');
            $table->string('direccion', 128)->nullable()->comment('Dirección de ubicación del proveedor/cliente');
            $table->string('telefono', 20)->comment('Teléfono o celular del proveedor/cliente');
            $table->string('email', 128)->nullable()->comment('Correo electrónico del proveedor/cliente');
            $table->string('descripcion')->nullable()->comment('Descripción del proveedor/cliente');
            $table->char('tipo', 1)->comment('Define el tipo de entidad. P = Proveedor, C = Cliente, A = Ambos');
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
        Schema::dropIfExists('entidad');
    }
}
