<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class alumnos_documentos
 * @package App\Models
 * @version November 30, 2019, 7:42 am UTC
 *
 * @property integer id_alumno
 * @property integer id_documento
 * @property string documento
 */
class alumnos_documentos extends Model
{

    public $table = 'alumnos_documentos';
    



    public $fillable = [
        'id_alumno',
        'id_documento',
        'documento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_alumno' => 'integer',
        'id_documento' => 'integer',
        'documento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
