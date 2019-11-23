<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatealumnosRequest;
use App\Http\Requests\UpdatealumnosRequest;
use App\Repositories\alumnosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class alumnosController extends AppBaseController
{
    /** @var  alumnosRepository */
    private $alumnosRepository;

    public function __construct(alumnosRepository $alumnosRepo)
    {
        $this->alumnosRepository = $alumnosRepo;
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
        $alumnos = $this->alumnosRepository->all();

        return view('alumnos.index')
            ->with('alumnos', $alumnos);
    }

    /**
     * Show the form for creating a new alumnos.
     *
     * @return Response
     */
    public function create()
    {
        return view('alumnos.create');
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

        $alumnos = $this->alumnosRepository->create($input);

        Flash::success('Alumnos saved successfully.');

        return redirect(route('alumnos.index'));
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
        $alumnos = $this->alumnosRepository->find($id);

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
        $alumnos = $this->alumnosRepository->find($id);

        if (empty($alumnos)) {
            Flash::error('Alumnos not found');

            return redirect(route('alumnos.index'));
        }

        return view('alumnos.edit')->with('alumnos', $alumnos);
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
        $alumnos = $this->alumnosRepository->find($id);

        if (empty($alumnos)) {
            Flash::error('Alumnos not found');

            return redirect(route('alumnos.index'));
        }

        $alumnos = $this->alumnosRepository->update($request->all(), $id);

        Flash::success('Alumnos updated successfully.');

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
        $alumnos = $this->alumnosRepository->find($id);

        if (empty($alumnos)) {
            Flash::error('Alumnos not found');

            return redirect(route('alumnos.index'));
        }

        $this->alumnosRepository->delete($id);

        Flash::success('Alumnos deleted successfully.');

        return redirect(route('alumnos.index'));
    }
}
