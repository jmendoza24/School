<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class asistencias
 * @package App\Models
 * @version December 29, 2019, 5:03 am UTC
 *
 * @property integer id_alumno
 * @property integer asistencia
 */
class asistencias extends Model
{

    public $table = 'asistencias';
    



    public $fillable = [
        'id_alumno',
        'asistencia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_alumno' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
