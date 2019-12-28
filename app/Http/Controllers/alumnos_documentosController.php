<?php

namespace App\Http\Controllers;
use App\Models\catalogos;
use App\Models\personal_info_alumno;


use App\Http\Requests\Createalumnos_documentosRequest;
use App\Http\Requests\Updatealumnos_documentosRequest;
use App\Repositories\alumnos_documentosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Storage;

use DB;
use Response;

class alumnos_documentosController extends AppBaseController
{
    /** @var  alumnos_documentosRepository */
    private $alumnosDocumentosRepository;

    public function __construct(alumnos_documentosRepository $alumnosDocumentosRepo)
    {
        $this->alumnosDocumentosRepository = $alumnosDocumentosRepo;
    }

    /**
     * Display a listing of the alumnos_documentos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $alumnosDocumentos = $this->alumnosDocumentosRepository->all();

        $documentos=catalogos::where('id',2)-get();

        return view('alumnos_documentos.index',compact('alumnosDocumentos','documentos'));
    }

    /**
     * Show the form for creating a new alumnos_documentos.
     *
     * @return Response
     */
    public function create()
    {
        return view('alumnos_documentos.create');
    }

    /**
     * Store a newly created alumnos_documentos in storage.
     *
     * @param Createalumnos_documentosRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $arreglo = $request->all();
        $id=$arreglo['id'];
        $id_al=$arreglo['id_alumno'];

        $variable=$arreglo['documento'.$id];

         if(empty($variable)){
            
            unset($variable);
        }else{
          

           $file_img = $request->file('documento'.$id);
            $img = Storage::url($file_img->store('alumnos', 'public'));
            $imgp = strpos($img,'/storage/');
            $img = substr($img, $imgp, strlen($img));
           $arreglo['documento']=$img;
           $arreglo['id_documento']=$id;
        

        $documentos = $this->alumnosDocumentosRepository->create($arreglo);

        $objeto_documentos = new personal_info_alumno; 
        $documentos=$objeto_documentos->documentos($id_al);
        


        $options =  view('alumnos_documentos.table',compact('documentos','id_al'))->render();
        
        return ($options);



       // return redirect(route('alumnosDocumentos.index'));
    }

   }
    public function edit($id)
    {
        $alumnosDocumentos = $this->alumnosDocumentosRepository->find($id);

        if (empty($alumnosDocumentos)) {
            Flash::error('Alumnos Documentos not found');

            return redirect(route('alumnosDocumentos.index'));
        }

        return view('alumnos_documentos.edit')->with('alumnosDocumentos', $alumnosDocumentos);
    }

    /**
     * Update the specified alumnos_documentos in storage.
     *
     * @param int $id
     * @param Updatealumnos_documentosRequest $request
     *
     * @return Response
     */
    public function update($id, Updatealumnos_documentosRequest $request)
    {
        $alumnosDocumentos = $this->alumnosDocumentosRepository->find($id);

        if (empty($alumnosDocumentos)) {
            Flash::error('Alumnos Documentos not found');

            return redirect(route('alumnosDocumentos.index'));
        }

        $alumnosDocumentos = $this->alumnosDocumentosRepository->update($request->all(), $id);

        Flash::success('Alumnos Documentos updated successfully.');

        return redirect(route('alumnosDocumentos.index'));
    }

    /**
     * Remove the specified alumnos_documentos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy(Request $request)
    {
       
        
        $arreglo = $request->all();
        $id=$arreglo['id'];
        $id_al=$arreglo['id_al'];
        DB::table('alumnos_documentos')->delete($id);

        $objeto_documentos = new personal_info_alumno; 
        $documentos=$objeto_documentos->documentos($id_al);
        
        $options =  view('alumnos_documentos.table',compact('documentos','id_al'))->render();
        
        return ($options);

    }
}
