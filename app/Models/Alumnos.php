<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Alumnos
 * @package App\Models
 * @version November 23, 2019, 5:25 am UTC
 *
 * @property integer id_grado
 * @property integer id_grupo
 * @property integer id_ciclo
 * @property string nombre_alumno
 * @property string apellidos_alumno
 * @property string fecha_nacimiento
 * @property integer id_estado
 * @property integer id_municipio
 * @property string direccion
 * @property integer cp
 * @property integer id_tipo_sangre
 * @property string num_control
 * @property integer nivel_estudio
 * @property string comentarios
 * @property string foto
 */
class Alumnos extends Model
{

    public $table = 'alumnos';
    



    public $fillable = [
        'id_grado',
        'id_grupo',
        'id_ciclo',
        'nombre_alumno',
        'apellidos_alumno',
        'fecha_nacimiento',
        'id_estado',
        'id_municipio',
        'direccion',
        'cp',
        'id_tipo_sangre',
        'num_control',
        'nivel_estudio',
        'comentarios',
        'foto',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_grado' => 'integer',
        'id_grupo' => 'integer',
        'id_ciclo' => 'integer',
        'nombre_alumno' => 'string',
        'apellidos_alumno' => 'string',
        'fecha_nacimiento' => 'date',
        'id_estado' => 'integer',
        'id_municipio' => 'integer',
        'direccion' => 'string',
        'cp' => 'integer',
        'id_tipo_sangre' => 'integer',
        'num_control' => 'string',
        'nivel_estudio' => 'integer',
        'comentarios' => 'string',
        'foto'=>'string',
        'activo' => 'integer'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_alumno' => 'required',
        'apellidos_alumno' => 'required',
        'num_control' => 'required'
    ];

    

    public function sql_estados()
    {
        
        return DB::table('tbl_estados as e')
                         ->select() 
                         ->get();

    }

   public function sql_estados_mun($id_estados)
    {
        return DB::table('tbl_estados as e')
                          ->join('tbl_estadosmun as em','em.estados_id','=','e.id')
                          ->join('tbl_municipios as m','em.municipios_id','=','m.id')
                          ->selectraw('m.*')
                          ->where('e.id',$id_estados)
                          ->get();
        

    }

    public function sql_alumnos($id)
    {
        
        return DB::table('alumnos as a')
                         ->leftjoin('catalogos as c','c.id','=','a.id_grado')
                         ->leftjoin('catalogos as c2','c2.id','=','a.id_grupo')
                         ->leftjoin('catalogos as c3','c3.id','=','a.id_ciclo')
                         ->selectraw('a.id_grado, a.id_grupo,c.valor as grado,c2.valor as grupo,count(*) as conteos')
                         ->where('a.nivel_estudio',$id)
                         ->groupby('c.valor','c2.valor','a.id_grado', 'a.id_grupo')
                         ->get();

    }  

    public function grados_grupos($nivel,$grado,$grupo)
    {
      
        return DB::table('alumnos as a')
                         ->leftjoin('catalogos as c','c.id','=','a.id_grado')
                         ->leftjoin('catalogos as c2','c2.id','=','a.id_grupo')
                         ->selectraw('a.* ,c.valor as grado,c2.valor as grupo')
                         ->where([['a.nivel_estudio',$nivel],['a.id_grado',$grado],['a.id_grupo',$grupo]])
                         ->orderby('c.valor','asc')
                         ->get();

    } 
/**
    function get_municipios($id){
        return db::table('tbl_estadosmun as em')
                ->join('tbl_municipios as m','em.municipios_id','=','m.id')
                ->selectraw('m.*')
                ->where('e.id',$id)
                ->get();
    }

*/
}


