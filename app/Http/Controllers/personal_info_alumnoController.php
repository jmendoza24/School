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

class personal_info_alumnoController extends AppBaseController
{
    /** @var  personal_info_alumnoRepository */
    private $personalInfoAlumnoRepository;

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
        return view('personal_info_alumnos.show',compact('info'));
        //$credencal = view('personal_info_alumnos.show')->render();
        //return ($credencal);

        $pdf = \PDF::loadView('personal_info_alumnos.show')->setPaper('a4','landscape');
        //$pdf = App('dompdf.wrapper');
        //$pdf->loadHTML($credencal);
        //return $pdf->stream();

        return $pdf->download('invoice.pdf');
        
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
        //dd($alumnosmarerias);
        $id_al=$id;

        
       // dd($id_al);


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
        #dd($alumnos);
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

       
        $options =  view('reportes.table',compact('personalInfoAlumnos'))->render();

        return json_encode($options);
    }

}
