<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class alumnos
 * @package App\Models
 * @version November 21, 2019, 5:11 am UTC
 *
 * @property string nombre
 * @property string direccion
 * @property integer grado
 * @property string grupo
 * @property string salon
 */
class alumnos extends Model
{

    public $table = 'alumnos';
    



    public $fillable = [
        'nombre',
        'direccion',
        'grado',
        'grupo',
        'salon'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'direccion' => 'string',
        'grado' => 'integer',
        'grupo' => 'string',
        'salon' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'grado' => 'required',
        'grupo' => 'required'
    ];

    
}
