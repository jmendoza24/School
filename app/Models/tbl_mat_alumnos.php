<?php

namespace App\Models;
use DB;
use App\Models\personal_info_alumno;
use App\Models\tbl_mat_alumnos;


use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class tbl_mat_alumnos
 * @package App\Models
 * @version December 12, 2019, 5:45 am UTC
 *
 * @property integer id_alumno
 * @property integer id_materia
 * @property integer calificacion
 * @property string comentarios
 */
class tbl_mat_alumnos extends Model
{

    public $table = 'tbl_mat_alumnos';
    



    public $fillable = [
        'id_alumno',
        'id_materia',
        'calificacion',
        'comentarios',
        'school_cycle',
        'grade'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_alumno' => 'integer',
        'id_materia' => 'string',
        'calificacion' => 'string',
        'comentarios' => 'string',
        'school_cycle' => 'integer',
        'grade' => 'integer',


    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function mate($id_alumno)
    {
      
      $al=personal_info_alumno::where('id',$id_alumno)->get();
      $al=$al[0];      
      $grado=$al['grade'];


      // return DB::table('alumnos_personal_infos as i')
      //            ->join('materias as m',function($join)use($grado){
      //                                      $join->on('m.nivel','i.level')
      //                                      ->where('m.grado',$grado);})

      //            ->leftjoin('tbl_mat_alumnos as ta',function($join)use($id_alumno){
      //                                      $join->on('ta.id_materia','m.id')
      //                                      ->where('ta.id_alumno',$id_alumno);})
      //                    //->leftjoin('alumnos_documentos as ad','ad.id_documento','=','c.id')
      //                     ->selectraw('m.materia,m.id as id_mat,i.id as id_alumno, level, nivel, grado, grade,ta.calificacion,ta.comentarios')
      //                     ->where('i.id',$id_alumno)
      //                     ->get();
        

             

        return DB::table('alumnos_personal_infos as i')
                      ->join('tbl_mat_alumnos as ta','ta.id_alumno','=','i.id')
                      ->selectraw('*,ta.id as id_mat,ta.id_materia as materia')
                      ->where('i.id',$id_alumno)
                      ->get();

    }

    public function bs_materia($id_alumno,$id_materia)
    {
      
     
     return   $sql=tbl_mat_alumnos::where([['id_alumno',$id_alumno],['id_materia',$id_materia]])->count();




    }

    
}
