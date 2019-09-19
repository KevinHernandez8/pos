<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    /**
     * Nombre de la tabla asociada
     */
    protected $table = 'entidad';

    /**
     * Llave primaria de la tabla
     */
    protected $primaryKey = 'entidad_id';

    /**
     * Indica que el modelo no tiene timestamps
     */
    public $timestamps = false;

    /**
     * Valores por defecto
     */
    protected $attributes = [
        'activo' => 'S',
    ];

    protected $fillable = [
        'nombre', 'numero_documento', 'direccion', 'telefono', 'email', 'descripcion', 'tipo'
    ];

    /**
     * Relación con la tabla usuario
     */
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Relación con la tabla tipo_documento
     */
    public function tipoDocumento()
    {
        return $this->belongsTo('App\TipoDocumento');
    }

    /**
     * Relación con la tabla compra
     */
    public function compras()
    {
        return $this->hasMany('App\Compra');
    }

    /**
     * Relación con la tabla venta
     */
    public function ventas()
    {
        return $this->hasMany('App\Venta');
    }
}
