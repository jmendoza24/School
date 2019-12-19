<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class notas
 * @package App\Models
 * @version December 15, 2019, 11:08 pm UTC
 *
 * @property integer id_alumno
 * @property string nota
 */
class notas extends Model
{

    public $table = 'notas';
    



    public $fillable = [
        'id_alumno',
        'nota'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_alumno' => 'integer',
        'nota' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
