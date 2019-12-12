<?php

namespace App\Http\Controllers;
use App\Models\Alumnos;
use App\Models\catalogos;
 

use App\Http\Requests\CreatealumnosRequest;
use App\Http\Requests\UpdatealumnosRequest;
use App\Repositories\AlumnosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        
        $objeto_alumnos = new Alumnos;
        $alumnos=array();
        $prescolar=$objeto_alumnos->sql_alumnos(1);
        $primaria=$objeto_alumnos->sql_alumnos(2);

        return view('alumnos.index',compact('alumnos','prescolar','primaria'));
        //return view('alumnos.table',compact('alumnos','prescolar','primaria'))->render();

    }

    /**
     * Show the form for creating a new alumnos.
     *
     * @return Response
     */
    public function create()
    {   
        $objeto_alumnos = new Alumnos;
        $grados=catalogos::where('catalogo',3)->get();
        $grupos=catalogos::where('catalogo',4)->get();
        $ciclos=catalogos::where('catalogo',1)->get();
        $alumnos=array();
        $estados=$objeto_alumnos->sql_estados();
        $municipios=array();

        return view('alumnos.create',compact('estados','municipios','grados','grupos','ciclos','alumnos'));
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
         $id=$input['id'];
         $file_img = $request->file('documento'.$id);
         dd($file_img);
        
        if(!empty($file_img)){
            $img = Storage::url($file_img->store('alumnos', 'public'));
            $imgp = strpos($img,'/storage/');
            $img = substr($img, $imgp, strlen($img));
            $input['foto']  = $img;
        }

        $alumnos = $this->AlumnosRepository->create($input);
        
        dd();
         
        return redirect()->route('alumnos.index');
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
        $municipios= $objeto_alumnos->sql_estados_mun($alumnos->id_estado);

        $Alumnos=Alumnos::all();
        $Alumnos=$Alumnos[0];
        $grados=catalogos::where('catalogo',3)->get();
        $grupos=catalogos::where('catalogo',4)->get();
        $ciclos=catalogos::where('catalogo',1)->get();

        return view('alumnos.edit',compact('estados','alumnos','municipios','id','Alumnos','grados','grupos','ciclos'));
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
        $alumnos = $this->AlumnosRepository->update($alumnos, $id);
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

    public function alumnos(Request $request){

        $objeto_alumnos = new Alumnos;
        $alumnos=$objeto_alumnos->grados_grupos($request->nivel,$request->grado,$request->grupo);
        
        $options =  view('alumnos.table',compact('alumnos'))->render();

        return json_encode($options);
        

    }
}
