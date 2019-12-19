<?php

namespace App\Http\Controllers;
use App\Models\notas;

use App\Http\Requests\CreatenotasRequest;
use App\Http\Requests\UpdatenotasRequest;
use App\Repositories\notasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use DB;
use Response;

class notasController extends AppBaseController
{
    /** @var  notasRepository */
    private $notasRepository;

    public function __construct(notasRepository $notasRepo)
    {
        $this->notasRepository = $notasRepo;
    }

    /**
     * Display a listing of the notas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $notas = $this->notasRepository->all();

        return view('notas.index')
            ->with('notas', $notas);
    }

    /**
     * Show the form for creating a new notas.
     *
     * @return Response
     */
    public function create()
    {
        return view('notas.create');
    }

    /**
     * Store a newly created notas in storage.
     *
     * @param CreatenotasRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $id_alumno = $input['id_alumno'];

        $notas = $this->notasRepository->create($input);
        
        $notas=notas::where('id_alumno',$id_alumno)->get();

        $options =  view('notas.table',compact('notas'))->render();

        return json_encode($options);
    }

    /**
     * Display the specified notas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $notas = $this->notasRepository->find($id);

        if (empty($notas)) {
            Flash::error('Notas not found');

            return redirect(route('notas.index'));
        }

        return view('notas.show')->with('notas', $notas);
    }

    /**
     * Show the form for editing the specified notas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $notas = $this->notasRepository->find($id);

        if (empty($notas)) {
            Flash::error('Notas not found');

            return redirect(route('notas.index'));
        }

        return view('notas.edit')->with('notas', $notas);
    }

    /**
     * Update the specified notas in storage.
     *
     * @param int $id
     * @param UpdatenotasRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        $input = $request->all();
        $id_alumno = $input['id_alumno'];
        $id = $input['id'];
        $notas = $this->notasRepository->find($id);
        $notas = $this->notasRepository->update($request->all(), $id);
        
        $notas=notas::where('id_alumno',$id_alumno)->get();

        $options =  view('notas.table',compact('notas'))->render();

        return json_encode($options);
    }

    /**
     * Remove the specified notas from storage.
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
        DB::table('notas')->delete($id);

        $notas=notas::where('id_alumno',$id_alumno)->get();

        $options =  view('notas.table',compact('notas'))->render();

        return json_encode($options);

    }
}
