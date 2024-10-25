<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateaerolineaRequest;
use App\Http\Requests\UpdateaerolineaRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\aerolineaRepository;
use Illuminate\Http\Request;
use Flash;

class aerolineaController extends AppBaseController
{
    /** @var aerolineaRepository $aerolineaRepository*/
    private $aerolineaRepository;

    public function __construct(aerolineaRepository $aerolineaRepo)
    {
        $this->aerolineaRepository = $aerolineaRepo;
    }

    /**
     * Display a listing of the aerolinea.
     */
    public function index(Request $request)
    {
        $aerolineas = $this->aerolineaRepository->paginate(10);

        return view('aerolineas.index')
            ->with('aerolineas', $aerolineas);
    }

    /**
     * Show the form for creating a new aerolinea.
     */
    public function create()
    {
        return view('aerolineas.create');
    }

    /**
     * Store a newly created aerolinea in storage.
     */
    public function store(CreateaerolineaRequest $request)
    {
        $input = $request->all();

        $aerolinea = $this->aerolineaRepository->create($input);

        Flash::success('Aerolinea saved successfully.');

        return redirect(route('aerolineas.index'));
    }

    /**
     * Display the specified aerolinea.
     */
    public function show($id)
    {
        $aerolinea = $this->aerolineaRepository->find($id);

        if (empty($aerolinea)) {
            Flash::error('Aerolinea not found');

            return redirect(route('aerolineas.index'));
        }

        return view('aerolineas.show')->with('aerolinea', $aerolinea);
    }

    /**
     * Show the form for editing the specified aerolinea.
     */
    public function edit($id)
    {
        $aerolinea = $this->aerolineaRepository->find($id);

        if (empty($aerolinea)) {
            Flash::error('Aerolinea not found');

            return redirect(route('aerolineas.index'));
        }

        return view('aerolineas.edit')->with('aerolinea', $aerolinea);
    }

    /**
     * Update the specified aerolinea in storage.
     */
    public function update($id, UpdateaerolineaRequest $request)
    {
        $aerolinea = $this->aerolineaRepository->find($id);

        if (empty($aerolinea)) {
            Flash::error('Aerolinea not found');

            return redirect(route('aerolineas.index'));
        }

        $aerolinea = $this->aerolineaRepository->update($request->all(), $id);

        Flash::success('Aerolinea updated successfully.');

        return redirect(route('aerolineas.index'));
    }

    /**
     * Remove the specified aerolinea from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aerolinea = $this->aerolineaRepository->find($id);

        if (empty($aerolinea)) {
            Flash::error('Aerolinea not found');

            return redirect(route('aerolineas.index'));
        }

        $this->aerolineaRepository->delete($id);

        Flash::success('Aerolinea deleted successfully.');

        return redirect(route('aerolineas.index'));
    }
}
