<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createvuelo_colaboradorRequest;
use App\Http\Requests\Updatevuelo_colaboradorRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\vuelo_colaboradorRepository;
use Illuminate\Http\Request;
use Flash;

class vuelo_colaboradorController extends AppBaseController
{
    /** @var vuelo_colaboradorRepository $vueloColaboradorRepository*/
    private $vueloColaboradorRepository;

    public function __construct(vuelo_colaboradorRepository $vueloColaboradorRepo)
    {
        $this->vueloColaboradorRepository = $vueloColaboradorRepo;
    }

    /**
     * Display a listing of the vuelo_colaborador.
     */
    public function index(Request $request)
    {
        $vueloColaboradors = $this->vueloColaboradorRepository->paginate(10);

        return view('vuelo_colaboradors.index')
            ->with('vueloColaboradors', $vueloColaboradors);
    }

    /**
     * Show the form for creating a new vuelo_colaborador.
     */
    public function create()
    {
        return view('vuelo_colaboradors.create');
    }

    /**
     * Store a newly created vuelo_colaborador in storage.
     */
    public function store(Createvuelo_colaboradorRequest $request)
    {
        $input = $request->all();

        $vueloColaborador = $this->vueloColaboradorRepository->create($input);

        Flash::success('Vuelo Colaborador saved successfully.');

        return redirect(route('vueloColaboradors.index'));
    }

    /**
     * Display the specified vuelo_colaborador.
     */
    public function show($id)
    {
        $vueloColaborador = $this->vueloColaboradorRepository->find($id);

        if (empty($vueloColaborador)) {
            Flash::error('Vuelo Colaborador not found');

            return redirect(route('vueloColaboradors.index'));
        }

        return view('vuelo_colaboradors.show')->with('vueloColaborador', $vueloColaborador);
    }

    /**
     * Show the form for editing the specified vuelo_colaborador.
     */
    public function edit($id)
    {
        $vueloColaborador = $this->vueloColaboradorRepository->find($id);

        if (empty($vueloColaborador)) {
            Flash::error('Vuelo Colaborador not found');

            return redirect(route('vueloColaboradors.index'));
        }

        return view('vuelo_colaboradors.edit')->with('vueloColaborador', $vueloColaborador);
    }

    /**
     * Update the specified vuelo_colaborador in storage.
     */
    public function update($id, Updatevuelo_colaboradorRequest $request)
    {
        $vueloColaborador = $this->vueloColaboradorRepository->find($id);

        if (empty($vueloColaborador)) {
            Flash::error('Vuelo Colaborador not found');

            return redirect(route('vueloColaboradors.index'));
        }

        $vueloColaborador = $this->vueloColaboradorRepository->update($request->all(), $id);

        Flash::success('Vuelo Colaborador updated successfully.');

        return redirect(route('vueloColaboradors.index'));
    }

    /**
     * Remove the specified vuelo_colaborador from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vueloColaborador = $this->vueloColaboradorRepository->find($id);

        if (empty($vueloColaborador)) {
            Flash::error('Vuelo Colaborador not found');

            return redirect(route('vueloColaboradors.index'));
        }

        $this->vueloColaboradorRepository->delete($id);

        Flash::success('Vuelo Colaborador deleted successfully.');

        return redirect(route('vueloColaboradors.index'));
    }
}
