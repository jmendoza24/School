<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Contactos
 * @package App\Models
 * @version November 23, 2019, 5:50 am UTC
 *
 * @property integer id_alumno
 * @property string nombre_contacto
 * @property string telefono
 * @property string correo
 * @property string direccion_contacto
 * @property integer cp
 * @property integer id_estado
 * @property integer id_municipio
 * @property string comentarios
 * @property string telefono_adicional
 */
class Contactos extends Model
{

    public $table = 'contactos';
    



    public $fillable = [
        'id_alumno',
        'nombre_contacto',
        'telefonoc',
        'correo',
        'direccion_contacto',
        'cpc',
        'id_estadoc',
        'id_municipioc',
        'comentariosc',
        'telefono_adicional'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_alumno' => 'integer',
        'nombre_contacto' => 'string',
        'telefonoc' => 'string',
        'correo' => 'string',
        'direccion_contacto' => 'string',
        'cpc' => 'integer',
        'id_estadoc' => 'integer',
        'id_municipioc' => 'integer',
        'comentariosc' => 'string',
        'telefono_adicional' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_contacto' => 'required',
        'telefonoc' => 'required',
        'correo' => 'required',
        'direccion_contacto' => 'required'
    ];

    
}
