<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclaseRequest;
use App\Http\Requests\UpdateclaseRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\claseRepository;
use Illuminate\Http\Request;
use Flash;

class claseController extends AppBaseController
{
    /** @var claseRepository $claseRepository*/
    private $claseRepository;

    public function __construct(claseRepository $claseRepo)
    {
        $this->claseRepository = $claseRepo;
    }

    /**
     * Display a listing of the clase.
     */
    public function index(Request $request)
    {
        $clases = $this->claseRepository->paginate(10);

        return view('clases.index')
            ->with('clases', $clases);
    }

    /**
     * Show the form for creating a new clase.
     */
    public function create()
    {
        return view('clases.create');
    }

    /**
     * Store a newly created clase in storage.
     */
    public function store(CreateclaseRequest $request)
    {
        $input = $request->all();

        $clase = $this->claseRepository->create($input);

        Flash::success('Clase saved successfully.');

        return redirect(route('clases.index'));
    }

    /**
     * Display the specified clase.
     */
    public function show($id)
    {
        $clase = $this->claseRepository->find($id);

        if (empty($clase)) {
            Flash::error('Clase not found');

            return redirect(route('clases.index'));
        }

        return view('clases.show')->with('clase', $clase);
    }

    /**
     * Show the form for editing the specified clase.
     */
    public function edit($id)
    {
        $clase = $this->claseRepository->find($id);

        if (empty($clase)) {
            Flash::error('Clase not found');

            return redirect(route('clases.index'));
        }

        return view('clases.edit')->with('clase', $clase);
    }

    /**
     * Update the specified clase in storage.
     */
    public function update($id, UpdateclaseRequest $request)
    {
        $clase = $this->claseRepository->find($id);

        if (empty($clase)) {
            Flash::error('Clase not found');

            return redirect(route('clases.index'));
        }

        $clase = $this->claseRepository->update($request->all(), $id);

        Flash::success('Clase updated successfully.');

        return redirect(route('clases.index'));
    }

    /**
     * Remove the specified clase from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $clase = $this->claseRepository->find($id);

        if (empty($clase)) {
            Flash::error('Clase not found');

            return redirect(route('clases.index'));
        }

        $this->claseRepository->delete($id);

        Flash::success('Clase deleted successfully.');

        return redirect(route('clases.index'));
    }
}
