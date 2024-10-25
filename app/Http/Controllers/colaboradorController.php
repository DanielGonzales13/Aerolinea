<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecolaboradorRequest;
use App\Http\Requests\UpdatecolaboradorRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\colaboradorRepository;
use Illuminate\Http\Request;
use Flash;

class colaboradorController extends AppBaseController
{
    /** @var colaboradorRepository $colaboradorRepository*/
    private $colaboradorRepository;

    public function __construct(colaboradorRepository $colaboradorRepo)
    {
        $this->colaboradorRepository = $colaboradorRepo;
    }

    /**
     * Display a listing of the colaborador.
     */
    public function index(Request $request)
    {
        $colaboradors = $this->colaboradorRepository->paginate(10);

        return view('colaboradors.index')
            ->with('colaboradors', $colaboradors);
    }

    /**
     * Show the form for creating a new colaborador.
     */
    public function create()
    {
        return view('colaboradors.create');
    }

    /**
     * Store a newly created colaborador in storage.
     */
    public function store(CreatecolaboradorRequest $request)
    {
        $input = $request->all();

        $colaborador = $this->colaboradorRepository->create($input);

        Flash::success('Colaborador saved successfully.');

        return redirect(route('colaboradors.index'));
    }

    /**
     * Display the specified colaborador.
     */
    public function show($id)
    {
        $colaborador = $this->colaboradorRepository->find($id);

        if (empty($colaborador)) {
            Flash::error('Colaborador not found');

            return redirect(route('colaboradors.index'));
        }

        return view('colaboradors.show')->with('colaborador', $colaborador);
    }

    /**
     * Show the form for editing the specified colaborador.
     */
    public function edit($id)
    {
        $colaborador = $this->colaboradorRepository->find($id);

        if (empty($colaborador)) {
            Flash::error('Colaborador not found');

            return redirect(route('colaboradors.index'));
        }

        return view('colaboradors.edit')->with('colaborador', $colaborador);
    }

    /**
     * Update the specified colaborador in storage.
     */
    public function update($id, UpdatecolaboradorRequest $request)
    {
        $colaborador = $this->colaboradorRepository->find($id);

        if (empty($colaborador)) {
            Flash::error('Colaborador not found');

            return redirect(route('colaboradors.index'));
        }

        $colaborador = $this->colaboradorRepository->update($request->all(), $id);

        Flash::success('Colaborador updated successfully.');

        return redirect(route('colaboradors.index'));
    }

    /**
     * Remove the specified colaborador from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $colaborador = $this->colaboradorRepository->find($id);

        if (empty($colaborador)) {
            Flash::error('Colaborador not found');

            return redirect(route('colaboradors.index'));
        }

        $this->colaboradorRepository->delete($id);

        Flash::success('Colaborador deleted successfully.');

        return redirect(route('colaboradors.index'));
    }
}
