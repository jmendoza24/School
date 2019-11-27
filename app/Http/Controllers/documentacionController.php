<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedocumentacionRequest;
use App\Http\Requests\UpdatedocumentacionRequest;
use App\Repositories\documentacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class documentacionController extends AppBaseController
{
    /** @var  documentacionRepository */
    private $documentacionRepository;

    public function __construct(documentacionRepository $documentacionRepo)
    {
        $this->documentacionRepository = $documentacionRepo;
    }

    /**
     * Display a listing of the documentacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $documentacions = $this->documentacionRepository->all();

        return view('documentacions.index')
            ->with('documentacions', $documentacions);
    }

    /**
     * Show the form for creating a new documentacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('documentacions.create');
    }

    /**
     * Store a newly created documentacion in storage.
     *
     * @param CreatedocumentacionRequest $request
     *
     * @return Response
     */
    public function store(CreatedocumentacionRequest $request)
    {
        $input = $request->all();

        $documentacion = $this->documentacionRepository->create($input);

        Flash::success('Documentacion saved successfully.');

        return redirect(route('documentacions.index'));
    }

    /**
     * Display the specified documentacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $documentacion = $this->documentacionRepository->find($id);

        if (empty($documentacion)) {
            Flash::error('Documentacion not found');

            return redirect(route('documentacions.index'));
        }

        return view('documentacions.show')->with('documentacion', $documentacion);
    }

    /**
     * Show the form for editing the specified documentacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $documentacion = $this->documentacionRepository->find($id);

        if (empty($documentacion)) {
            Flash::error('Documentacion not found');

            return redirect(route('documentacions.index'));
        }

        return view('documentacions.edit')->with('documentacion', $documentacion);
    }

    /**
     * Update the specified documentacion in storage.
     *
     * @param int $id
     * @param UpdatedocumentacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedocumentacionRequest $request)
    {
        $documentacion = $this->documentacionRepository->find($id);

        if (empty($documentacion)) {
            Flash::error('Documentacion not found');

            return redirect(route('documentacions.index'));
        }

        $documentacion = $this->documentacionRepository->update($request->all(), $id);

        Flash::success('Documentacion updated successfully.');

        return redirect(route('documentacions.index'));
    }

    /**
     * Remove the specified documentacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $documentacion = $this->documentacionRepository->find($id);

        if (empty($documentacion)) {
            Flash::error('Documentacion not found');

            return redirect(route('documentacions.index'));
        }

        $this->documentacionRepository->delete($id);

        Flash::success('Documentacion deleted successfully.');

        return redirect(route('documentacions.index'));
    }
}
