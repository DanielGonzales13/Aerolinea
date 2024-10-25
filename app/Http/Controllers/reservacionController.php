<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatereservacionRequest;
use App\Http\Requests\UpdatereservacionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\reservacionRepository;
use Illuminate\Http\Request;
use Flash;

class reservacionController extends AppBaseController
{
    /** @var reservacionRepository $reservacionRepository*/
    private $reservacionRepository;

    public function __construct(reservacionRepository $reservacionRepo)
    {
        $this->reservacionRepository = $reservacionRepo;
    }

    /**
     * Display a listing of the reservacion.
     */
    public function index(Request $request)
    {
        $reservacions = $this->reservacionRepository->paginate(10);

        return view('reservacions.index')
            ->with('reservacions', $reservacions);
    }

    /**
     * Show the form for creating a new reservacion.
     */
    public function create()
    {
        return view('reservacions.create');
    }

    /**
     * Store a newly created reservacion in storage.
     */
    public function store(CreatereservacionRequest $request)
    {
        $input = $request->all();

        $reservacion = $this->reservacionRepository->create($input);

        Flash::success('Reservacion saved successfully.');

        return redirect(route('reservacions.index'));
    }

    /**
     * Display the specified reservacion.
     */
    public function show($id)
    {
        $reservacion = $this->reservacionRepository->find($id);

        if (empty($reservacion)) {
            Flash::error('Reservacion not found');

            return redirect(route('reservacions.index'));
        }

        return view('reservacions.show')->with('reservacion', $reservacion);
    }

    /**
     * Show the form for editing the specified reservacion.
     */
    public function edit($id)
    {
        $reservacion = $this->reservacionRepository->find($id);

        if (empty($reservacion)) {
            Flash::error('Reservacion not found');

            return redirect(route('reservacions.index'));
        }

        return view('reservacions.edit')->with('reservacion', $reservacion);
    }

    /**
     * Update the specified reservacion in storage.
     */
    public function update($id, UpdatereservacionRequest $request)
    {
        $reservacion = $this->reservacionRepository->find($id);

        if (empty($reservacion)) {
            Flash::error('Reservacion not found');

            return redirect(route('reservacions.index'));
        }

        $reservacion = $this->reservacionRepository->update($request->all(), $id);

        Flash::success('Reservacion updated successfully.');

        return redirect(route('reservacions.index'));
    }

    /**
     * Remove the specified reservacion from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reservacion = $this->reservacionRepository->find($id);

        if (empty($reservacion)) {
            Flash::error('Reservacion not found');

            return redirect(route('reservacions.index'));
        }

        $this->reservacionRepository->delete($id);

        Flash::success('Reservacion deleted successfully.');

        return redirect(route('reservacions.index'));
    }
}
