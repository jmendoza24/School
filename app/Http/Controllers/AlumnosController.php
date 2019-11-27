<?php

namespace App\Http\Controllers;
use App\Models\Alumnos;


use App\Http\Requests\CreatealumnosRequest;
use App\Http\Requests\UpdatealumnosRequest;
use App\Repositories\AlumnosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class alumnosController extends AppBaseController
{
    /** @var  AlumnosRepository */
    private $AlumnosRepository;

    public function __construct(AlumnosRepository $alumnosRepo)
    {
        $this->AlumnosRepository = $alumnosRepo;
    }

    /**
     * Display a listing of the alumnos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {   
        
        $alumnos = Alumnos::all();
        return view('alumnos.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new alumnos.
     *
     * @return Response
     */
    public function create()
    {   
        $objeto_alumnos = new Alumnos;
        $estados=$objeto_alumnos->sql_estados();
        $municipios='';

        return view('alumnos.create',compact('estados','alumnos','municipios'));
    }

    /**
     * Store a newly created alumnos in storage.
     *
     * @param CreatealumnosRequest $request
     *
     * @return Response
     */
    public function store(CreatealumnosRequest $request)
    {
         $input = $request->all();
        $alumnos = $this->AlumnosRepository->create($input);
        


        return redirect(route('alumnos.index',compact('estados','alumnos')));
    }

    /**
     * Display the specified alumnos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alumnos = $this->AlumnosRepository->find($id);

        if (empty($alumnos)) {
            Flash::error('Alumnos not found');

            return redirect(route('alumnos.index'));
        }

        return view('alumnos.show')->with('alumnos', $alumnos);
    }

    /**
     * Show the form for editing the specified alumnos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alumnos = $this->AlumnosRepository->find($id);
        $objeto_alumnos = new Alumnos;
        $estados=$objeto_alumnos->sql_estados();
        $municipios='';
        $Alumnos=Alumnos::all();
        $Alumnos=$Alumnos[0];
        return view('alumnos.edit',compact('estados','alumnos','municipios','id','Alumnos'));
    }

    /**
     * Update the specified alumnos in storage.
     *
     * @param int $id
     * @param UpdatealumnosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatealumnosRequest $request)
    {
        $alumnos = $this->AlumnosRepository->find($id);

        $alumnos = $this->AlumnosRepository->update($request->all(), $id);

        //dd($alumnos);
        return redirect(route('alumnos.index'));
    }

    /**
     * Remove the specified alumnos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alumnos = $this->AlumnosRepository->find($id);

        if (empty($alumnos)) {
            Flash::error('Alumnos not found');

            return redirect(route('alumnos.index'));
        }

        $this->AlumnosRepository->delete($id);

        Flash::success('Alumnos deleted successfully.');

        return redirect(route('alumnos.index'));
    }

     public function municipios(Request $request)
    {   
        $id_estados = $request->id_estado;
        $objeto_alumnos = new Alumnos;
        $municipios=$objeto_alumnos->sql_estados_mun($id_estados);

        $op = '';
        foreach ($municipios as $mun ) {
            $op .="<option value=".$mun->id.">".$mun->municipio;
        }

        return $op;
    }
}
