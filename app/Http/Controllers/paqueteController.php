<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepaqueteRequest;
use App\Http\Requests\UpdatepaqueteRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\paqueteRepository;
use Illuminate\Http\Request;
use Flash;

class paqueteController extends AppBaseController
{
    /** @var paqueteRepository $paqueteRepository*/
    private $paqueteRepository;

    public function __construct(paqueteRepository $paqueteRepo)
    {
        $this->paqueteRepository = $paqueteRepo;
    }

    /**
     * Display a listing of the paquete.
     */
    public function index(Request $request)
    {
        $paquetes = $this->paqueteRepository->paginate(10);

        return view('paquetes.index')
            ->with('paquetes', $paquetes);
    }

    /**
     * Show the form for creating a new paquete.
     */
    public function create()
    {
        return view('paquetes.create');
    }

    /**
     * Store a newly created paquete in storage.
     */
    public function store(CreatepaqueteRequest $request)
    {
        $input = $request->all();

        $paquete = $this->paqueteRepository->create($input);

        Flash::success('Paquete saved successfully.');

        return redirect(route('paquetes.index'));
    }

    /**
     * Display the specified paquete.
     */
    public function show($id)
    {
        $paquete = $this->paqueteRepository->find($id);

        if (empty($paquete)) {
            Flash::error('Paquete not found');

            return redirect(route('paquetes.index'));
        }

        return view('paquetes.show')->with('paquete', $paquete);
    }

    /**
     * Show the form for editing the specified paquete.
     */
    public function edit($id)
    {
        $paquete = $this->paqueteRepository->find($id);

        if (empty($paquete)) {
            Flash::error('Paquete not found');

            return redirect(route('paquetes.index'));
        }

        return view('paquetes.edit')->with('paquete', $paquete);
    }

    /**
     * Update the specified paquete in storage.
     */
    public function update($id, UpdatepaqueteRequest $request)
    {
        $paquete = $this->paqueteRepository->find($id);

        if (empty($paquete)) {
            Flash::error('Paquete not found');

            return redirect(route('paquetes.index'));
        }

        $paquete = $this->paqueteRepository->update($request->all(), $id);

        Flash::success('Paquete updated successfully.');

        return redirect(route('paquetes.index'));
    }

    /**
     * Remove the specified paquete from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paquete = $this->paqueteRepository->find($id);

        if (empty($paquete)) {
            Flash::error('Paquete not found');

            return redirect(route('paquetes.index'));
        }

        $this->paqueteRepository->delete($id);

        Flash::success('Paquete deleted successfully.');

        return redirect(route('paquetes.index'));
    }
}
