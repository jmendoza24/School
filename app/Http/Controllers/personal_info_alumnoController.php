<?php

namespace App\Http\Controllers;
use App\Models\personal_info_alumno;
use App\Models\catalogos;
use App\Models\alumnos_documentos;
use App\Models\tbl_mat_alumnos;
use App\Models\notas;
 

use App\Http\Requests\Createpersonal_info_alumnoRequest;
use App\Http\Requests\Updatepersonal_info_alumnoRequest;
use App\Repositories\personal_info_alumnoRepository;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;
use PDF;
use View;
use DB;
use Mail;


class personal_info_alumnoController extends AppBaseController
{
    /** @var  personal_info_alumnoRepository */
    private $personalInfoAlumnoRepository;
   private $alumnosDocumentosRepository;

    public function __construct(personal_info_alumnoRepository $personalInfoAlumnoRepo)
    {
        $this->personalInfoAlumnoRepository = $personalInfoAlumnoRepo;
    }

    /**
     * Display a listing of the personal_info_alumno.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        
        $objeto_alumnos = new personal_info_alumno;
        $personalInfoAlumnos=array();
        $prescolar=$objeto_alumnos->sql_alumnos(1);
        $primaria=$objeto_alumnos->sql_alumnos(2);
        $secundaria=$objeto_alumnos->sql_alumnos(3);
        $prepa=$objeto_alumnos->sql_alumnos(4);


        return view('personal_info_alumnos.index',compact('personalInfoAlumnos','prescolar','primaria','secundaria','prepa'));

    }

    /**
     * Show the form for creating a new personal_info_alumno.
     *
     * @return Response
     */
    public function create()
    {   
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
        $alumnosmarerias = array();
        

        return view('personal_info_alumnos.create',compact('grados','grupos','ciclos','alumnos','personalInfoAlumno','alumnosDocumentos'));
    }

    /**
     * Store a newly created personal_info_alumno in storage.
     *
     * @param Createpersonal_info_alumnoRequest $request
     *
     * @return Response
     */
    public function store(Createpersonal_info_alumnoRequest $request)
    {   


        $input = $request->all();

        $ext  = $request->ext;


        $file_img = $request->file('foto');
        if(!empty($file_img)){
            $img = Storage::url($file_img->store('alumnos', 'public'));
            $imgp = strpos($img,'/storage/');
            $img = substr($img, $imgp, strlen($img));
            $input['photo_alumno']  = $img;
        }

        $personalInfoAlumno = $this->personalInfoAlumnoRepository->create($input);

        

        if($ext==1){

            $cat_doc=catalogos::where('catalogo',2)->get();

            $user = DB::table('alumnos_personal_infos')
                          ->selectraw("max(id) as id")
                          ->get();
            
            $user=$user[0];
            $id_al=$user->id;

            foreach ($cat_doc as $key) {
                 
                if(isset($input['documento'.$key->id])){
                    
                    $file_img=$input['documento'.$key->id];
//dd($file_img);
                        if(!empty($file_img)){
                        $img = Storage::url($file_img->store('alumnos', 'public'));
                        $imgp = strpos($img,'/storage/');
                        $img = substr($img, $imgp, strlen($img));

                        DB::table('alumnos_documentos')->insertGetId(
                        array('id_alumno' => $id_al,
                              'id_documento' => $key->id,
                              'documento' => $img,
                                  )
                        );
                    }

                }               

            }

        $vista='personal_info_alumnos.correo_alumno';
        $alum=personal_info_alumno::where('id',$id_al)->get();
        $alum=$alum[0];
        
        
        $grupos=catalogos::where('id',$alum->group)->get();
        $grupos=$grupos[0];
        $ciclos=catalogos::where('id',$alum->school_cycle)->get();
        $ciclos=$ciclos[0];


        if($alum->level==1){
             $level='Pre kindergarten';
        }elseif($alum->level==2){
             $level='Primary';
        }elseif($alum->level==3){
             $level='Middle schooll';
        }else{
             $level='High school ';
        }


        if($alum->grade==1){
             $grado='1';
        }elseif($alum->grade==2){
             $grado='2';
        }elseif($alum->grade==3){
             $grado='3';
        }elseif($alum->grade==4){
             $grado='4';
        }elseif($alum->grade==5){
             $grado='5';
        }elseif($alum->grade==6){
             $grado='6';
        }elseif($alum->grade==7){
             $grado='7';
        }elseif($alum->grade==8){
             $grado='8';
        }elseif($alum->grade==9){
             $grado='9';
        }elseif($alum->grade==10){
             $grado='10';
        }elseif($alum->grade==11){
             $grado='11';
        }elseif($alum->grade==12){
             $grado='12';
        }elseif($alum->grade==13){
             $grado='13';
        }elseif($alum->grade==14){
             $grado='14';
        }else{
          $grado="";
        }


        
         if($alum->gender==1){
             $genero='M';
        }elseif($alum->level==2){
             $genero='F';
        }else{
          $genero="";
        }


        if($alum->ethnicity==1){
             $ethnicity='Students of Hispanic/Latino Origin';
        }elseif($alum->ethnicity==2){
             $ethnicity='Not Hispanic/Latino';
        }else{
          $ethnicity="";
        }



        if($alum->race==1){
             $race='American Indian or Alaska Native';
        }elseif($alum->race==2){
             $race='Asian';
        }elseif($alum->race==3){
             $race='Black or African American';
        }elseif($alum->race==4){
             $race='Native Hawaiian or other Pacific Islander';
        }elseif($alum->race==5){
             $race='White';
        }elseif($alum->race==4){
             $race='';
        }


        if($alum->special_ed==1){
             $special_ed='YES';
        }elseif($alum->special_ed==2){
             $special_ed='NO';
        }else{
          $special_ed="";
        }


        if($alum->gifted_talented==1){
             $gifted_talented='YES';
        }elseif($alum->gifted_talented==2){
             $gifted_talented='NO';
        }else{
          $gifted_talented="";
        }




            $data = array(

            'name'=>$alum->name,
            'date_birth'=>$alum->date_birth,
            'place_birth'=>$alum->place_birth,
            'gender'=>$genero, 
            'native_language'=>$alum->native_language,
            'ethnicity'=>$ethnicity,
            'race'=>$race,
            'special_ed'=>$special_ed,
            'gifted_talented'=>$gifted_talented,
            'address'=>$alum->address,
            'city'=>$alum->city,
            'state'=>$alum->state,
            'zipcode'=>$alum->zipcode,
            'country'=>$alum->country,
            'tel'=>$alum->tel,
            'email'=>$alum->email,
            'parents_cell'=>$alum->parents_cell,
            'id_personal'=>$alum->id_personal,
            'personal_info'=>$alum->personal_info,
            'parents_email'=>$alum->parents_email,
            'name_parent'=>$alum->name_parent,
            'last_school'=>$alum->last_school,
            'phone_school'=>$alum->phone_school,
            'school_address'=>$alum->school_address,
            'last_date_attended'=>$alum->last_date_attended,
            'last_complete_level'=>$alum->last_complete_level,
            'comments'=>$alum->comments,
            'photo_alumno'=>$alum->photo_alumno,
            'grade'=>$grado,
            'level'=>$level,
            'group'=>$grupos->valor,
            'num_control'=>$alum->num_control,
            'school_cycle'=>$ciclos->valor,
            'curp'=>$alum->curp
                       
         );

    
       Mail::send($vista, $data, function($msj) use ($data) {
                        
        //    $pdf = PDF::loadView('cotizacions.correo_cliente',$data); 
            $msj->from('Mati@admin.com');
            $msj->sender('Mati@admin.com');
            $msj->subject('New Student');
            $msj->to('diego05vidales@gmail.com');

                
                                
           // $msj->attachData($pdf->output(), 'cotizacion.pdf');
        }); 

            return redirect()->route('personalInfoAlumnos.thanks');
        }else{
            return redirect()->route('personalInfoAlumnos.index');    
        }
        

    }

    /**
     * Display the specified personal_info_alumno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id){
        $objeto_alumnos = new personal_info_alumno;
        $objeto_alumnos->id = $id;

        $credencal = $objeto_alumnos->informacion_alumno($objeto_alumnos);



        
        $info = $credencal[0];
        #return view('personal_info_alumnos.show',compact('info'));
        //$credencal = view('personal_info_alumnos.show')->render();
        //return ($credencal);

        $pdf = \PDF::loadView('personal_info_alumnos.show',compact('info'))->setPaper('a4','landscape');
        //$pdf = App('dompdf.wrapper');
        //$pdf->loadHTML($credencal);
        //return $pdf->stream();

        return $pdf->download('Credencial.pdf');
        
    }

    /**
     * Show the form for editing the specified personal_info_alumno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {   


        $personalInfoAlumno = $this->personalInfoAlumnoRepository->find($id);
        $objeto_alumnos = new personal_info_alumno; 
        $alumnos=personal_info_alumno::all();
        $alumnos=$alumnos[0];
        $grados=catalogos::where('catalogo',3)->get();
        $grupos=catalogos::where('catalogo',4)->get();
        $ciclos=catalogos::where('catalogo',1)->get();
        $alumnosDocumentos = alumnos_documentos::get();
        $notas=notas::where('id_alumno',$id)->get();

        $objeto_documentos = new personal_info_alumno; 
        $documentos=$objeto_documentos->documentos($id);

        $objeto_materias = new tbl_mat_alumnos; 
        $alumnosmarerias=$objeto_materias->mate($id);
        $id_al=$id;


        


        //$documentos=catalogos::where('catalogo',2)->get();

        return view('personal_info_alumnos.edit',compact('alumnos','id','personalInfoAlumno','grados','grupos','ciclos','alumnosDocumentos','documentos','id_al','alumnosmarerias','notas'));
    }

    /**
     * Update the specified personal_info_alumno in storage.
     *
     * @param int $id
     * @param Updatepersonal_info_alumnoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatepersonal_info_alumnoRequest $request)
    {   



        $alumnos = $this->personalInfoAlumnoRepository->find($id);
        $alumnos = $request->all();

        $file_img = $request->file('foto');
        if(!empty($file_img)){
            $img = Storage::url($file_img->store('alumnos', 'public'));
            $imgp = strpos($img,'/storage/');
            $img = substr($img, $imgp, strlen($img));
            $alumnos['photo_alumno']  = $img;
        }else{
            unset($alumnos['photo_alumno'] );
        }
        $alumnos = $this->personalInfoAlumnoRepository->update($alumnos, $id);
        return redirect(route('personalInfoAlumnos.index'));

    }

    /**
     * Remove the specified personal_info_alumno from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    { 
        $personalInfoAlumno = $this->personalInfoAlumnoRepository->find($id);

        if (empty($personalInfoAlumno)) {
            Flash::error('Personal Info Alumno not found');

            return redirect(route('personalInfoAlumnos.index'));
        }

        $this->personalInfoAlumnoRepository->delete($id);

        Flash::success('Personal Info Alumno deleted successfully.');
 
        return redirect(route('personalInfoAlumnos.index'));
    }
    public function alumnos(Request $request){

        $objeto_alumnos = new personal_info_alumno;
        $personalInfoAlumnos=$objeto_alumnos->grados_grupos($request->nivel,$request->grado,$request->grupo);
        #dd($personalInfoAlumnos);
        $options =  view('personal_info_alumnos.table',compact('personalInfoAlumnos'))->render();

        return json_encode($options);
        

    }

    public function baja_pdf(Request $request)
    {
        $input = $request->all();

        $level=$input['level'];
        $grade=$input['grade'];
        $group=$input['group'];
        $ethnicity=$input['ethnicity'];
        $race=$input['race'];

        $objeto_alumnos = new personal_info_alumno;
        $personalInfoAlumnos=$objeto_alumnos->pdf($level,$grade,$group,$ethnicity,$race);
        $asistencia = array();
       
        $options =  view('reportes.table',compact('personalInfoAlumnos','asistencia'))->render();

        return json_encode($options);
    }

function descarga_credencial(Request $request){
        $info = db::table('alumnos_personal_infos as a')
                    ->leftjoin('catalogos as c', 'c.id','a.school_cycle')
                ->where('a.id',$request->id_alumno)
                ->selectraw('a.*,valor as ciclo')
                ->get();
        $info = $info[0];
        
        db::table('tbl_datos')->where('id_alumno',$info->id)->delete();

        $materias = db::table('tbl_mat_alumnos')->where([['id_alumno',$info->id],['grade',$info->grade]])->get();

        //dd($materias);

      return view('personal_info_alumnos.reporte_calificacion',compact('info','materias'));
    }

    function imprime_boleta(Request $request){
        $info = db::table('alumnos_personal_infos as a')
                    ->leftjoin('catalogos as c', 'c.id','a.school_cycle')
                ->where('a.id',$request->id_alumno)
                ->selectraw('a.*,valor as ciclo')
                ->get();
        $info = $info[0];
        
        $datos = db::table('tbl_datos')->where('id_alumno',$request->id_alumno)->get();
        
        if(sizeof($datos)>0){
            $datos= $datos[0];    
        }else{
            $datos = array('promedio'=>0,
                            'texto'=>'');
            $datos = (object)$datos;
        }
       # dd($datos);

        $materias = db::table('tbl_mat_alumnos')->where([['id_alumno',$request->id_alumno],['grade',$info->grade]])->get();

        // $info = 1;
        $pdf = \PDF::loadView('personal_info_alumnos.reporte_calificacion',compact('info','materias'));
        return $pdf->download('calificacion.pdf');
    }


    public function asistencia(Request $request)
    {

        $input = $request->all();
        $personalInfoAlumnos=$input['datos'];
        $options =  view('personal_info_alumnos.asistencia',compact('personalInfoAlumnos'))->render();
        return $options;


    }

    function baja_asistencia(Request $request){
      $filtro = new personal_info_alumno();
      $asistencia = $filtro->obtener_asistencia($request);
      #dd($asistencia);
      $personalInfoAlumnos = array('');

      $options =  view('reportes.table',compact('asistencia','personalInfoAlumnos'))->render();
      return json_encode($options);
      
    }
}
