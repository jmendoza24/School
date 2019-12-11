<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\personal_info_alumnoRepository;
use App\Models\personal_info_alumno;
use App\Models\catalogos;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $personalInfoAlumnoRepository;

    public function __construct()
    {
        #$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    function register(){
        $objeto_alumnos = new personal_info_alumno;
        $grados=catalogos::where('catalogo',3)->get();
        $grupos=catalogos::where('catalogo',4)->get();
        $ciclos=catalogos::where('catalogo',1)->get();
        $alumnos=array();
        $personalInfoAlumno = array('grade'=>'',
                                    'group'=>'',
                                    'level'=>'',
                                    'school_cycle'=>'',
                                    'gender'=>'','ethnicity'=>'',
                                    'race'=>'','special_ed'=>'',
                                    'gifted_talented'=>''
                                );
        $personalInfoAlumno = (object)$personalInfoAlumno;
        $alumnosDocumentos = array();

        return view('personal_info_alumnos.registo_ext',compact('grados','grupos','ciclos','alumnos','personalInfoAlumno','alumnosDocumentos'));
     }

          
    public function store(Createpersonal_info_alumnoRequest $request)
    {   


        $input = $request->all();

        $file_img = $request->file('foto');
        if(!empty($file_img)){
            $img = Storage::url($file_img->store('alumnos', 'public'));
            $imgp = strpos($img,'/storage/');
            $img = substr($img, $imgp, strlen($img));
            $input['photo_alumno']  = $img;
        }

        $personalInfoAlumno = $this->personalInfoAlumnoRepository->create($input);
        dd($personalInfoAlumno);
        //return redirect()->route('personalInfoAlumnos.index');

    }

    public function gracias(Request $request){
        return view('personal_info_alumnos.thanks');
    }

    function valida_curp(Request $request){
        $contero =  db::table('alumnos_personal_infos')->where('curp',$request->curp)->count();

        return json_encode($contero);
    }

    function  inicio(){
        return view('home');
    }

}
