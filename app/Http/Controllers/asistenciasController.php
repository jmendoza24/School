<?php

namespace App\Http\Controllers;
use App\Models\personal_info_alumno;
use App\Models\asistencias;


use App\Http\Requests\CreateasistenciasRequest;
use App\Http\Requests\UpdateasistenciasRequest;
use App\Repositories\asistenciasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use View;
use DB;
use Carbon\Carbon; //Importa la clase Carbon hasta arriba de tu clase

class asistenciasController extends AppBaseController
{
    /** @var  asistenciasRepository */
    private $asistenciasRepository;

    public function __construct(asistenciasRepository $asistenciasRepo)
    {
        $this->asistenciasRepository = $asistenciasRepo;
    }

    /**
     * Display a listing of the asistencias.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $objeto_alumnos = new personal_info_alumno;
        $personalInfoAlumnos=$objeto_alumnos->grados_grupos($request->nivel,$request->grade,$request->group);

        $options =  view('personal_info_alumnos.asistencia',compact('personalInfoAlumnos'))->render();

        return ($options);
    }

    /**
     * Show the form for creating a new asistencias.
     *
     * @return Response
     */
    public function create()
    {
        return view('asistencias.create');
    }

    /**
     * Store a newly created asistencias in storage.
     *
     * @param CreateasistenciasRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();



     $as=   db::select("insert into asistencias(id_alumno,created_at)
         select ".$request->id_alumno.",fecha
         from  tbl_calendario
         where fecha between '".$request->f_inicio."' and '".$request->f_fin."'
         and fecha not in (select created_at from asistencias where id_alumno = ".$request->id_alumno.")
         and 
         ");

      //  $asistencias = $this->asistenciasRepository->create($input);
         $objeto_alumnos = new personal_info_alumno;
         $personalInfoAlumnos=$objeto_alumnos->grados_grupos($request->nivel,$request->grade,$request->group);

        $options =  view('personal_info_alumnos.asistencia',compact('personalInfoAlumnos'))->render();

         return ($options);

    }

    /**
     * Display the specified asistencias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asistencias = $this->asistenciasRepository->find($id);

        if (empty($asistencias)) {
            Flash::error('Asistencias not found');

            return redirect(route('asistencias.index'));
        }

        return view('asistencias.show')->with('asistencias', $asistencias);
    }

    /**
     * Show the form for editing the specified asistencias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asistencias = $this->asistenciasRepository->find($id);

        if (empty($asistencias)) {
            Flash::error('Asistencias not found');

            return redirect(route('asistencias.index'));
        }

        return view('asistencias.edit')->with('asistencias', $asistencias);
    }

    /**
     * Update the specified asistencias in storage.
     *
     * @param int $id
     * @param UpdateasistenciasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateasistenciasRequest $request)
    {
        $asistencias = $this->asistenciasRepository->find($id);

        if (empty($asistencias)) {
            Flash::error('Asistencias not found');

            return redirect(route('asistencias.index'));
        }

        $asistencias = $this->asistenciasRepository->update($request->all(), $id);

        Flash::success('Asistencias updated successfully.');

        return redirect(route('asistencias.index'));
    }

    /**
     * Remove the specified asistencias from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asistencias = $this->asistenciasRepository->find($id);

        if (empty($asistencias)) {
            Flash::error('Asistencias not found');

            return redirect(route('asistencias.index'));
        }

        $this->asistenciasRepository->delete($id);

        Flash::success('Asistencias deleted successfully.');

        return redirect(route('asistencias.index'));
    }

    public function lista_asisencia_alumnos(Request $request)
    {
        $name=$request->name;
        $asistencias=asistencias::where('id_alumno',$request->id)->get();
        $options =  view('personal_info_alumnos.asistencias_alumno',compact('asistencias','name'))->render();

         return ($options); 

    }
}
