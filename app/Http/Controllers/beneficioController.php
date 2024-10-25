<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebeneficioRequest;
use App\Http\Requests\UpdatebeneficioRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\beneficioRepository;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use app\Models\beneficio;

class beneficioController extends AppBaseController
{
    /** @var beneficioRepository $beneficioRepository*/
    private $beneficioRepository;

    public function __construct(beneficioRepository $beneficioRepo)
    {
        $this->beneficioRepository = $beneficioRepo;
    }

    /**
     * Display a listing of the beneficio.
     */
    public function index(Request $request)
    {
        $beneficios = DB::table('beneficios')
        ->join('clases', 'beneficios.idclase', '=', 'clases.id')
        ->select('beneficios.id', 'clases.descripcion as clase', 'beneficios.descripcion')
        ->paginate(10);

        return view('beneficios.index')
            ->with('beneficios', $beneficios);   

    }

    /**
     * Show the form for creating a new beneficio.
     */
    public function create()
    {
        return view('beneficios.create');
    }

    /**
     * Store a newly created beneficio in storage.
     */
    public function store(CreatebeneficioRequest $request)
    {
        $input = $request->all();

        $beneficio = $this->beneficioRepository->create($input);

        Flash::success('Beneficio saved successfully.');

        return redirect(route('beneficios.index'));
    }

    /**
     * Display the specified beneficio.
     */
    public function show($id)
    {
        $beneficio = beneficio::where('beneficios.id', $id)
        ->join('clases', 'beneficios.idclase', '=', 'clases.id')
        ->select('beneficios.id', 'clases.descripcion as clase', 'beneficios.descripcion', 'beneficios.created_at', 'beneficios.updated_at')
        ->first();

        if (empty($beneficio)) {
            Flash::error('Beneficio not found');

            return redirect(route('beneficios.index'));
        }

        return view('beneficios.show')->with('beneficio', $beneficio);
    }

    /**
     * Show the form for editing the specified beneficio.
     */
    public function edit($id)
    {
        $beneficio = $this->beneficioRepository->find($id);

        if (empty($beneficio)) {
            Flash::error('Beneficio not found');

            return redirect(route('beneficios.index'));
        }

        return view('beneficios.edit')->with('beneficio', $beneficio);
    }

    /**
     * Update the specified beneficio in storage.
     */
    public function update($id, UpdatebeneficioRequest $request)
    {
        $beneficio = $this->beneficioRepository->find($id);

        if (empty($beneficio)) {
            Flash::error('Beneficio not found');

            return redirect(route('beneficios.index'));
        }

        $beneficio = $this->beneficioRepository->update($request->all(), $id);

        Flash::success('Beneficio updated successfully.');

        return redirect(route('beneficios.index'));
    }

    /**
     * Remove the specified beneficio from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $beneficio = $this->beneficioRepository->find($id);

        if (empty($beneficio)) {
            Flash::error('Beneficio not found');

            return redirect(route('beneficios.index'));
        }

        $this->beneficioRepository->delete($id);

        Flash::success('Beneficio deleted successfully.');

        return redirect(route('beneficios.index'));
    }
}