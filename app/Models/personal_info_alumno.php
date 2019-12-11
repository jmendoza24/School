<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model as Model;

/**  
 * Class personal_info_alumno
 * @package App\Models
 * @version November 28, 2019, 5:33 pm UTC
 *
 * @property string name
 * @property string|\Carbon\Carbon date_birth
 * @property string place_birth
 * @property integer gender
 * @property string native_language
 * @property integer ethnicity
 * @property integer race
 * @property integer special_ed
 * @property integer gifted_talented
 * @property string address
 * @property string city
 * @property string state
 * @property string zipcode
 * @property string country
 * @property string tel
 * @property string parents_cell
 * @property integer id_personal
 * @property string personal_info
 * @property string email
 * @property string parents_email
 * @property string name_parent
 * @property string last_school
 * @property string phone_school
 * @property string school_address
 * @property string|\Carbon\Carbon last_date_attended
 * @property string last_complete_level
 * @property string comments
 * @property string photo_alumno
 * @property integer grade
 * @property integer level
 * @property integer group
 * @property integer school_cycle
 */
class personal_info_alumno extends Model
{

    public $table = 'alumnos_personal_infos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'date_birth',
        'place_birth',
        'gender',
        'native_language',
        'ethnicity',
        'race',
        'special_ed',
        'gifted_talented',
        'address',
        'city',
        'state',
        'zipcode',
        'country',
        'tel',
        'parents_cell',
        'id_personal',
        'personal_info',
        'email',
        'parents_email',
        'name_parent',
        'last_school',
        'phone_school',
        'school_address',
        'last_date_attended',
        'last_complete_level',
        'comments',
        'photo_alumno',
        'grade',
        'level',
        'group',
        'school_cycle',
        'num_control',
        'curp'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'date_birth' => 'datetime',
        'place_birth' => 'string',
        'gender' => 'integer',
        'native_language' => 'string',
        'ethnicity' => 'integer',
        'race' => 'integer',
        'special_ed' => 'integer',
        'gifted_talented' => 'integer',
        'address' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zipcode' => 'string',
        'country' => 'string',
        'tel' => 'string',
        'parents_cell' => 'string',
        'id_personal' => 'integer',
        'personal_info' => 'string',
        'email' => 'string',
        'parents_email' => 'string',
        'name_parent' => 'string',
        'last_school' => 'string',
        'phone_school' => 'string',
        'school_address' => 'string',
        'last_date_attended' => 'datetime',
        'last_complete_level' => 'string',
        'comments' => 'string',
        'photo_alumno' => 'string',
        'grade' => 'integer',
        'level' => 'integer',
        'group' => 'integer',
        'school_cycle' => 'integer',
        'num_control' => 'string',
        'curp' => 'string'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

     public function sql_alumnos($id)
    {
        
        return DB::table('alumnos_personal_infos as a')
                        // ->leftjoin('catalogos as c','c.id','=','a.grade')
                         ->leftjoin('catalogos as c2','c2.id','=','a.group')
                         ->leftjoin('catalogos as c3','c3.id','=','a.school_cycle')
                         ->selectraw("a.grade, a.group,
                                    case a.grade when 1 then 'Prekinder'
                                                 when 2 then 'Kinder'
                                                 else a.grade end as grado,c2.valor as grupo,count(*) as conteos")
                         ->where('a.level',$id)
                         ->groupby('c2.valor','a.grade', 'a.group')
                         ->get();

    }  

    public function grados_grupos($nivel,$grado,$grupo)
    {
      
        return DB::table('alumnos_personal_infos as a')
                         //->leftjoin('catalogos as c','c.id','=','a.grade')
                         ->leftjoin('catalogos as c2','c2.id','=','a.group')
                         ->selectraw("a.* ,a.grade as grado,c2.valor as grupo,
                                    case a.level when 1 then 'Pre kindergarten'
                                               when 2 then 'Primary'
                                               when 3 then 'High school (Secundaria)'
                                               when 4 then 'High school (preparatoria)' else 'No definido' end as nivel_escolar ")
                         ->where([['a.level',$nivel],['a.grade',$grado],['a.group',$grupo]])
                         ->orderby('a.grade','asc')
                         ->get();

    }
}
