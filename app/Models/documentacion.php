<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class documentacion
 * @package App\Models
 * @version November 26, 2019, 9:51 pm UTC
 *
 * @property number id_alumno
 * @property string acta_nacimiento
 * @property string curp
 * @property string comentarios
 */
class documentacion extends Model
{

    public $table = 'documentacions';
    



    public $fillable = [
        'id_alumno',
        'acta_nacimiento',
        'curp',
        'comentarios'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'acta_nacimiento' => 'string',
        'curp' => 'string',
        'comentarios' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
