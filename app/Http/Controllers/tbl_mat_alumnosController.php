<?php

namespace App\Http\Controllers;
use App\Models\tbl_mat_alumnos;

use App\Http\Requests\Createtbl_mat_alumnosRequest;
use App\Http\Requests\Updatetbl_mat_alumnosRequest;
use App\Repositories\tbl_mat_alumnosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

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
        $id_alumnno=$input['id_alumno'];
        $id_materia=$input['id_materia'];
        $calificacion=$input['calificacion'];
        $comentarios=$input['comentarios'];



        $objeto_materias = new tbl_mat_alumnos; 
        $bs_mat=$objeto_materias->bs_materia($id_alumnno,$id_materia);
        
        if($bs_mat==0){
          
             $tblMatAlumnos = $this->tblMatAlumnosRepository->create($input);
             $v=1;
        }else{


         $contenido= tbl_mat_alumnos::where([['id_alumno', '=', $id_alumnno],['id_materia', '=', $id_materia]])
                            ->update([

                                    'id_alumno' => $id_alumnno,
                                    'id_materia' => $id_materia,
                                    'calificacion' => $calificacion,
                                    'comentarios' => $comentarios,
                                    ]);

          
        }       

      


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
    public function update($id, Updatetbl_mat_alumnosRequest $request)
    {
        $tblMatAlumnos = $this->tblMatAlumnosRepository->find($id);

        $tblMatAlumnos = $this->tblMatAlumnosRepository->update($request->all(), $id);

        Flash::success('Tbl Mat Alumnos updated successfully.');

        return redirect(route('tblMatAlumnos.index'));
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
    public function destroy($id)
    {
        $tblMatAlumnos = $this->tblMatAlumnosRepository->find($id);

        if (empty($tblMatAlumnos)) {
            Flash::error('Tbl Mat Alumnos not found');

            return redirect(route('tblMatAlumnos.index'));
        }

        $this->tblMatAlumnosRepository->delete($id);

        Flash::success('Tbl Mat Alumnos deleted successfully.');

        return redirect(route('tblMatAlumnos.index'));
    }
}
