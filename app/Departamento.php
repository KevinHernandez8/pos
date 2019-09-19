<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    /**
     * Nombre de la tabla asociada
     */
    protected $table = 'departamento';

    /**
     * Llave primaria de la tabla
     */
    protected $primaryKey = 'departamento_id';

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
     * Relación con la tabla ciudad
     */
    public function ciudades()
    {
        return $this->hasMany('App\Ciudad');
    }

    /**
     * Relación con la tabla parametros
     */
    public function parametros()
    {
        return $this->hasMany('App\Parametros');
    }
}
