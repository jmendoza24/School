<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class catalogos
 * @package App\Models
 * @version November 23, 2019, 5:16 am UTC
 *
 * @property integer catalogo
 * @property string valor
 */
class catalogos extends Model
{

    public $table = 'catalogos';
    



    public $fillable = [
        'catalogo',
        'valor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'catalogo' => 'integer',
        'valor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
