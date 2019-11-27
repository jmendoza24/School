<?php

namespace App\Http\Controllers;

use App\Models\catalogos;
use App\Http\Requests\CreatecatalogosRequest;
use App\Http\Requests\UpdatecatalogosRequest;
use App\Repositories\catalogosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use View;


class catalogosController extends AppBaseController
{
    /** @var  catalogosRepository */
    private $catalogosRepository;

    public function __construct(catalogosRepository $catalogosRepo)
    {
        $this->catalogosRepository = $catalogosRepo;
    }

    /**
     * Display a listing of the catalogos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ciclos = catalogos::where('catalogo',1)->get();
        $materias = catalogos::where('catalogo',2)->get();
        $grados = catalogos::where('catalogo',3)->get();
        $grupos = catalogos::where('catalogo',4)->get();

        return view('catalogos.index',compact('ciclos','materias','grados','grupos'));

    }

    function store(Request $request){
        catalogos::insert(['catalogo'=>$request->identificador,
                           'valor'=>$request->valor]);

        $ciclos = catalogos::where('catalogo',1)->get();
        $materias = catalogos::where('catalogo',2)->get();
        $grados = catalogos::where('catalogo',3)->get();
        $grupos = catalogos::where('catalogo',4)->get();

        $opcion = view('catalogos.table',compact('ciclos','materias','grados','grupos'))->render();

        return json_encode($opcion);

    }

    function elimina(Request $request){
        catalogos::where('id',$request->id)->delete();
        $ciclos = catalogos::where('catalogo',1)->get();
        $materias = catalogos::where('catalogo',2)->get();
        $grados = catalogos::where('catalogo',3)->get();
        $grupos = catalogos::where('catalogo',4)->get();

        $opcion = view('catalogos.table',compact('ciclos','materias','grados','grupos'))->render();

        return json_encode($opcion);

    }

    
}
