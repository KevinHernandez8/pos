<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametros extends Model
{
    /**
     * Nombre de la tabla asociada
     */
    protected $table = 'parametros';

    /**
     * Llave primaria de la tabla
     */
    protected $primaryKey = 'parametros_id';

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

    protected $fillable = ['nombre_establecimiento', 'numero_documento', 'direccion', 'telefono'];

    /**
     * Relación con la tabla departamento
     */
    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }

    /**
     * Relación con la tabla ciudad
     */
    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad');
    }

    /**
     * Relación con la tabla tipo_documento
     */
    public function tipoDocumento()
    {
        return $this->belongsTo('App\TipoDocumento');
    }

    /**
     * Relación con la tabla usuario
     */
    public function usuario()
    {
        return $this->belongsTo('App\User');
    }
}
