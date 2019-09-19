<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    /**
     * Nombre de la tabla asociada
     */
    protected $table = 'ciudad';

    /**
     * Llave primaria de la tabla
     */
    protected $primaryKey = 'ciudad_id';

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
     * Relación con la tabla departamento
     */
    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }

    /**
     * Relación con la tabla parametros
     */
    public function parametros()
    {
        return $this->hasMany('App\Parametros');
    }
}
