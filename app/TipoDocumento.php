<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    /**
     * Nombre de la tabla asociada
     */
    protected $table = 'tipo_documento';

    /**
     * Llave primaria de la tabla
     */
    protected $primaryKey = 'tipo_documento_id';

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

    protected $fillable = ['nombre'];

    /**
     * Relación con la tabla entidad
     */
    public function entidades()
    {
        return $this->hasMany('App\Entidad');
    }

    /**
     * Relación con la tabla parametros
     */
    public function parametros()
    {
        return $this->hasMany('App\Parametros');
    }
}
