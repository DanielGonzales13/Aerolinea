<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateaeropuertoRequest;
use App\Http\Requests\UpdateaeropuertoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\aeropuertoRepository;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use app\Models\departamento;
use app\Models\municipio;
use app\Models\aeropuerto;

class aeropuertoController extends AppBaseController
{
    /** @var aeropuertoRepository $aeropuertoRepository*/
    private $aeropuertoRepository;

    public function __construct(aeropuertoRepository $aeropuertoRepo)
    {
        $this->aeropuertoRepository = $aeropuertoRepo;
    }

    /**
     * Display a listing of the aeropuerto.
     */
    public function index(Request $request)
    {
        $aeropuertos = DB::table('aeropuertos')
        ->join('departamentos', 'aeropuertos.iddepto', '=', 'departamentos.id')
        ->join('municipios', 'aeropuertos.idmupio', '=', 'municipios.id')
        ->select('aeropuertos.id', 'aeropuertos.descripcion', 'aeropuertos.coordenada','aeropuertos.nomenclatura', 'departamentos.descripcion as depto', 'municipios.municipio')
        ->paginate(10);

    return view('aeropuertos.index')
        ->with('aeropuertos', $aeropuertos);   

    }

    /**
     * Show the form for creating a new aeropuerto.
     */
    public function create()
    {
        return view('aeropuertos.create');
    }

    /**
     * Store a newly created aeropuerto in storage.
     */
    public function store(CreateaeropuertoRequest $request)
    {
        $input = $request->all();

        $aeropuerto = $this->aeropuertoRepository->create($input);

        Flash::success('Aeropuerto saved successfully.');

        return redirect(route('aeropuertos.index'));
    }

    /**
     * Display the specified aeropuerto.
     */
    public function show($id)
    {
        $aeropuertos = aeropuerto::where('aeropuertos.id', $id)
        ->join('departamentos', 'aeropuertos.iddepto', '=', 'departamentos.id')
        ->join('municipios', 'aeropuertos.idmupio', '=', 'municipios.id')
        ->select('aeropuertos.id', 'aeropuertos.descripcion', 'aeropuertos.coordenada','aeropuertos.nomenclatura', 'departamentos.descripcion as depto', 'municipios.municipio', 'aeropuertos.created_at', 'aeropuertos.updated_at')->first();
        if (empty($aeropuertos)) {
            Flash::error('Aeropuertos not found');

            return redirect(route('aeropuertos.index'));
        }

    return view('aeropuertos.show')
        ->with('aeropuerto', $aeropuertos);   
    }

    /**
     * Show the form for editing the specified aeropuerto.
     */
    public function edit($id)
    {
        $aeropuerto = $this->aeropuertoRepository->find($id);

        if (empty($aeropuerto)) {
            Flash::error('Aeropuerto not found');

            return redirect(route('aeropuertos.index'));
        }

        return view('aeropuertos.edit')->with('aeropuerto', $aeropuerto);
    }

    /**
     * Update the specified aeropuerto in storage.
     */
    public function update($id, UpdateaeropuertoRequest $request)
    {
        $aeropuerto = $this->aeropuertoRepository->find($id);

        if (empty($aeropuerto)) {
            Flash::error('Aeropuerto not found');

            return redirect(route('aeropuertos.index'));
        }

        $aeropuerto = $this->aeropuertoRepository->update($request->all(), $id);

        Flash::success('Aeropuerto updated successfully.');

        return redirect(route('aeropuertos.index'));
    }

    /**
     * Remove the specified aeropuerto from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aeropuerto = $this->aeropuertoRepository->find($id);

        if (empty($aeropuerto)) {
            Flash::error('Aeropuerto not found');

            return redirect(route('aeropuertos.index'));
        }

        $this->aeropuertoRepository->delete($id);

        Flash::success('Aeropuerto deleted successfully.');

        return redirect(route('aeropuertos.index'));
    }
}
