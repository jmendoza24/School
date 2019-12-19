<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class materias
 * @package App\Models
 * @version November 27, 2019, 4:39 am UTC
 *
 * @property integer nivel
 * @property integer grado
 * @property string materia
 */
class materias extends Model
{

    public $table = 'materias';
    



    public $fillable = [
        'nivel',
        'grado',
        'materia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nivel' => 'integer',
        'grado' => 'integer',
        'materia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nivel' => 'required',
        'grado' => 'required',
        'materia' => 'required'
    ];

    
}
