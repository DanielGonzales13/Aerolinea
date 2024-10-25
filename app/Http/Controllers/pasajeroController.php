<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepasajeroRequest;
use App\Http\Requests\UpdatepasajeroRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\pasajeroRepository;
use Illuminate\Http\Request;
use Flash;

class pasajeroController extends AppBaseController
{
    /** @var pasajeroRepository $pasajeroRepository*/
    private $pasajeroRepository;

    public function __construct(pasajeroRepository $pasajeroRepo)
    {
        $this->pasajeroRepository = $pasajeroRepo;
    }

    /**
     * Display a listing of the pasajero.
     */
    public function index(Request $request)
    {
        $pasajeros = $this->pasajeroRepository->paginate(10);

        return view('pasajeros.index')
            ->with('pasajeros', $pasajeros);
    }

    /**
     * Show the form for creating a new pasajero.
     */
    public function create()
    {
        return view('pasajeros.create');
    }

    /**
     * Store a newly created pasajero in storage.
     */
    public function store(CreatepasajeroRequest $request)
    {
        $input = $request->all();

        $pasajero = $this->pasajeroRepository->create($input);

        Flash::success('Pasajero saved successfully.');

        return redirect(route('pasajeros.index'));
    }

    /**
     * Display the specified pasajero.
     */
    public function show($id)
    {
        $pasajero = $this->pasajeroRepository->find($id);

        if (empty($pasajero)) {
            Flash::error('Pasajero not found');

            return redirect(route('pasajeros.index'));
        }

        return view('pasajeros.show')->with('pasajero', $pasajero);
    }

    /**
     * Show the form for editing the specified pasajero.
     */
    public function edit($id)
    {
        $pasajero = $this->pasajeroRepository->find($id);

        if (empty($pasajero)) {
            Flash::error('Pasajero not found');

            return redirect(route('pasajeros.index'));
        }

        return view('pasajeros.edit')->with('pasajero', $pasajero);
    }

    /**
     * Update the specified pasajero in storage.
     */
    public function update($id, UpdatepasajeroRequest $request)
    {
        $pasajero = $this->pasajeroRepository->find($id);

        if (empty($pasajero)) {
            Flash::error('Pasajero not found');

            return redirect(route('pasajeros.index'));
        }

        $pasajero = $this->pasajeroRepository->update($request->all(), $id);

        Flash::success('Pasajero updated successfully.');

        return redirect(route('pasajeros.index'));
    }

    /**
     * Remove the specified pasajero from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pasajero = $this->pasajeroRepository->find($id);

        if (empty($pasajero)) {
            Flash::error('Pasajero not found');

            return redirect(route('pasajeros.index'));
        }

        $this->pasajeroRepository->delete($id);

        Flash::success('Pasajero deleted successfully.');

        return redirect(route('pasajeros.index'));
    }
}
