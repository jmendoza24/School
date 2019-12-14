<?php

namespace App\Http\Controllers;


use App\Models\catalogos;
use App\Http\Requests\CreatemateriasRequest;
use App\Http\Requests\UpdatemateriasRequest;
use App\Repositories\materiasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;  

class materiasController extends AppBaseController
{
    /** @var  materiasRepository */
    private $materiasRepository;

    public function __construct(materiasRepository $materiasRepo)
    {
        $this->materiasRepository = $materiasRepo;
    }

    /**
     * Display a listing of the materias.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $materias = $this->materiasRepository->all();

        return view('materias.index')
            ->with('materias', $materias);
    }

    /**
     * Show the form for creating a new materias.
     *
     * @return Response
     */
    public function create(){

        $grados = catalogos::where('catalogo',3)->get();
        $materias = array('nivel'=>0,
                          'grado'=>0);
        $materias =  (object)$materias;

        $grupos = catalogos::where('catalogo',4)->get();

        return view('materias.create',compact('grados','materias','grados','grupos'));
    }

    /**
     * Store a newly created materias in storage.
     *
     * @param CreatemateriasRequest $request
     *
     * @return Response
     */
    public function store(CreatemateriasRequest $request)
    {
        $input = $request->all();

        $materias = $this->materiasRepository->create($input);

        Flash::success('Materias saved successfully.');

        return redirect(route('materias.index'));
    }

    /**
     * Display the specified materias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $materias = $this->materiasRepository->find($id);

        if (empty($materias)) {
            Flash::error('Materias not found');

            return redirect(route('materias.index'));
        }

        return view('materias.show')->with('materias', $materias);
    }

    /**
     * Show the form for editing the specified materias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $materias = $this->materiasRepository->find($id);

        $grados = catalogos::where('catalogo',3)->get();

        return view('materias.edit',compact('materias','grados'));
    }

    /**
     * Update the specified materias in storage.
     *
     * @param int $id
     * @param UpdatemateriasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemateriasRequest $request)
    {
        $materias = $this->materiasRepository->find($id);

        if (empty($materias)) {
            Flash::error('Materias not found');

            return redirect(route('materias.index'));
        }

        $materias = $this->materiasRepository->update($request->all(), $id);

        Flash::success('Materias updated successfully.');

        return redirect(route('materias.index'));
    }

    /**
     * Remove the specified materias from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $materias = $this->materiasRepository->find($id);

        if (empty($materias)) {
            Flash::error('Materias not found');

            return redirect(route('materias.index'));
        }

        $this->materiasRepository->delete($id);

        Flash::success('Materias deleted successfully.');

        return redirect(route('materias.index'));
    }
}
