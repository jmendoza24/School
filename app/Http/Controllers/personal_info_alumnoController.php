<?php

namespace App\Http\Controllers;
use App\Models\personal_info_alumno;
use App\Models\catalogos;

use App\Http\Requests\Createpersonal_info_alumnoRequest;
use App\Http\Requests\Updatepersonal_info_alumnoRequest;
use App\Repositories\personal_info_alumnoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

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

        return view('personal_info_alumnos.create',compact('grados','grupos','ciclos','alumnos'));
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

        $file_img = $request->file('foto');
        if(!empty($file_img)){
            $img = Storage::url($file_img->store('alumnos', 'public'));
            $imgp = strpos($img,'/storage/');
            $img = substr($img, $imgp, strlen($img));
            $input['foto']  = $img;
        }

        $personalInfoAlumno = $this->personalInfoAlumnoRepository->create($input);

        return redirect()->route('personalInfoAlumnos.index');

    }

    /**
     * Display the specified personal_info_alumno.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $personalInfoAlumno = $this->personalInfoAlumnoRepository->find($id);

        if (empty($personalInfoAlumno)) {
            Flash::error('Personal Info Alumno not found');

            return redirect(route('personalInfoAlumnos.index'));
        }

        return view('personal_info_alumnos.show')->with('personalInfoAlumno', $personalInfoAlumno);
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


        $alumnos = $this->personalInfoAlumnoRepository->find($id);
        $objeto_alumnos = new personal_info_alumno; 
        $personalInfoAlumno=personal_info_alumno::all();
        $personalInfoAlumno=$personalInfoAlumno[0];
        $grados=catalogos::where('catalogo',3)->get();
        $grupos=catalogos::where('catalogo',4)->get();
        $ciclos=catalogos::where('catalogo',1)->get();

        return view('personal_info_alumnos.edit',compact('alumnos','id','personalInfoAlumno','grados','grupos','ciclos'));

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
            $alumnos['foto']  = $img;
        }else{
            unset($alumnos['foto'] );
        }
        //dd($alumnos);
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
}
