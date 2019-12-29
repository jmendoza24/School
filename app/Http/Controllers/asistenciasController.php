<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateasistenciasRequest;
use App\Http\Requests\UpdateasistenciasRequest;
use App\Repositories\asistenciasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use View;
use DB;

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
        $asistencias = $this->asistenciasRepository->all();

        return view('asistencias.index')
            ->with('asistencias', $asistencias);
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

        $asistencias = $this->asistenciasRepository->create($input);

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
}
