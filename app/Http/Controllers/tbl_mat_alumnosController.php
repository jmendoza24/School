<?php

namespace App\Http\Controllers;
use App\Models\personal_info_alumno;
use App\Models\tbl_mat_alumnos;


use App\Http\Requests\Createtbl_mat_alumnosRequest;
use App\Http\Requests\Updatetbl_mat_alumnosRequest;
use App\Repositories\tbl_mat_alumnosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
class tbl_mat_alumnosController extends AppBaseController
{
    /** @var  tbl_mat_alumnosRepository */
    private $tblMatAlumnosRepository;

    public function __construct(tbl_mat_alumnosRepository $tblMatAlumnosRepo)
    {
        $this->tblMatAlumnosRepository = $tblMatAlumnosRepo;
    }

    /**
     * Display a listing of the tbl_mat_alumnos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblMatAlumnos = $this->tblMatAlumnosRepository->all();

        return view('tbl_mat_alumnos.index')
            ->with('tblMatAlumnos', $tblMatAlumnos);
    }

    /**
     * Show the form for creating a new tbl_mat_alumnos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_mat_alumnos.create');
    }

    /**
     * Store a newly created tbl_mat_alumnos in storage.
     *
     * @param Createtbl_mat_alumnosRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        

        $input = $request->all();
        $id_alumno = $input['id_alumno'];

        $alum=personal_info_alumno::where('id',$id_alumno)->get();
        $alum=$alum[0];
        $vciclo=$alum->school_cycle;
        $input['school_cycle']=$vciclo;

        $tblMatAlumnos = $this->tblMatAlumnosRepository->create($input);

        $alumnosmarerias= DB::table('alumnos_personal_infos as i')
                      ->join('tbl_mat_alumnos as ta','ta.id_alumno','=','i.id')
                      ->selectraw('*,ta.id as id_mat,ta.id_materia as materia')
                      ->where([['i.id',$id_alumno],['ta.school_cycle',$vciclo]])
                      ->get();

        $options =  view('tbl_mat_alumnos.table',compact('alumnosmarerias'))->render();

        return json_encode($options); 

      


    }

    /**
     * Display the specified tbl_mat_alumnos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblMatAlumnos = $this->tblMatAlumnosRepository->find($id);

        if (empty($tblMatAlumnos)) {
            Flash::error('Tbl Mat Alumnos not found');

            return redirect(route('tblMatAlumnos.index'));
        }

        return view('tbl_mat_alumnos.show')->with('tblMatAlumnos', $tblMatAlumnos);
    }

    /**
     * Show the form for editing the specified tbl_mat_alumnos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblMatAlumnos = $this->tblMatAlumnosRepository->find($id);

        if (empty($tblMatAlumnos)) {
            Flash::error('Tbl Mat Alumnos not found');

            return redirect(route('tblMatAlumnos.index'));
        }

        return view('tbl_mat_alumnos.edit')->with('tblMatAlumnos', $tblMatAlumnos);
    }

    /**
     * Update the specified tbl_mat_alumnos in storage.
     *
     * @param int $id
     * @param Updatetbl_mat_alumnosRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        

        $input = $request->all();
        $id_alumno = $input['id_alumno'];
        $id = $input['id'];
        $calificacion= $input['calificacion'];

        $alumnosmarerias= DB::table('alumnos_personal_infos as i')
                      ->where('i.id',$id_alumno)
                      ->get();


        $alumnosmarerias=$alumnosmarerias[0];
        $ciclo= $alumnosmarerias->school_cycle;
        $grade= $alumnosmarerias->grade;
        $input['school_cycle']=$ciclo;
        $input['grade']=$grade;
        $input['calificacion']=$calificacion;


        $tblMatAlumnos = $this->tblMatAlumnosRepository->find($id);
        $tblMatAlumnos = $this->tblMatAlumnosRepository->update($input, $id);
        




    }

    /**
     * Remove the specified tbl_mat_alumnos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy(Request $request)
    {
        
        $input = $request->all();
        $id_alumno = $input['id_alumno'];
        $id = $input['id'];



        $alum=personal_info_alumno::where('id',$id_alumno)->get();
        $alum=$alum[0];
        $vciclo=$alum->school_cycle;
        $input['school_cycle']=$vciclo;


        DB::table('tbl_mat_alumnos')->delete($id);
            
        $alumnosmarerias= DB::table('alumnos_personal_infos as i')
                      ->join('tbl_mat_alumnos as ta','ta.id_alumno','=','i.id')
                      ->selectraw('*,ta.id as id_mat,ta.id_materia as materia')
                      ->where([['i.id',$id_alumno],['ta.school_cycle',$vciclo]])
                      ->get();


        $options =  view('tbl_mat_alumnos.table',compact('alumnosmarerias'))->render();

        return json_encode($options);
    }

    public function kardex(Request $request)
    {


        $input = $request->all();
        $id_alumno = $input['id_alumno'];
        $vciclo = $input['vciclo'];



        if (empty($vciclo)) {
           

        $alumnosmarerias= DB::table('alumnos_personal_infos as i')
                      ->join('tbl_mat_alumnos as ta','ta.id_alumno','=','i.id')
                      ->selectraw('*,ta.id as id_mat,ta.id_materia as materia')
                      ->where('i.id',$id_alumno)
                      ->get();

        $options =  view('tbl_mat_alumnos.table',compact('alumnosmarerias'))->render();
                    return json_encode($options);

        }else{




        $alumnosmarerias= DB::table('alumnos_personal_infos as i')
                      ->join('tbl_mat_alumnos as ta','ta.id_alumno','=','i.id')
                      ->selectraw('*,ta.id as id_mat,ta.id_materia as materia')
                      ->where([['i.id',$id_alumno],['ta.school_cycle',$vciclo]])
                      ->get();

                if (empty($alumnosmarerias)) {
               return  $resp=1;
                }else{


                    $options =  view('tbl_mat_alumnos.table',compact('alumnosmarerias'))->render();
                    return json_encode($options);
                 
                }


        }
            

        


    }
}
