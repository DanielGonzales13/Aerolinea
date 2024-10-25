<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevueloRequest;
use App\Http\Requests\UpdatevueloRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\vueloRepository;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use app\Models\vuelo;


class vueloController extends AppBaseController
{
    /** @var vueloRepository $vueloRepository*/
    private $vueloRepository;

    public function __construct(vueloRepository $vueloRepo)
    {
        $this->vueloRepository = $vueloRepo;
    }

    /**
     * Display a listing of the vuelo.
     */
    public function index(Request $request)
    {
        $vuelos = DB::table('vuelos')
        ->join('aerolineas', 'vuelos.idaerolinea', '=', 'aerolineas.id')
        ->join('aeropuertos as aorigen', 'vuelos.idaeropuerto_origen', '=', 'aorigen.id')
        ->join('aeropuertos as adestino', 'vuelos.idaeropuerto_destino', '=', 'adestino.id')
        ->select('vuelos.id', 'aerolineas.descripcion as aerolinea', 'aorigen.descripcion as aorigen','adestino.descripcion as adestino', 'vuelos.fecha_salida', 'vuelos.fecha_llegada', 'vuelos.maximo_pasajeros')
        ->paginate(10);

    return view('vuelos.index')
        ->with('vuelos', $vuelos);   

    }

    /**
     * Show the form for creating a new vuelo.
     */
    public function create()
    {
        return view('vuelos.create');
    }

    /**
     * Store a newly created vuelo in storage.
     */
    public function store(CreatevueloRequest $request)
    {
        $input = $request->all();

        $vuelo = $this->vueloRepository->create($input);

        Flash::success('Vuelo saved successfully.');

        return redirect(route('vuelos.index'));
    }

    /**
     * Display the specified vuelo.
     */
    public function show($id)
    {
        $vuelo = vuelo::where('vuelos.id', $id)
        ->join('aerolineas', 'vuelos.idaerolinea', '=', 'aerolineas.id')
        ->join('aeropuertos as aorigen', 'vuelos.idaeropuerto_origen', '=', 'aorigen.id')
        ->join('aeropuertos as adestino', 'vuelos.idaeropuerto_destino', '=', 'adestino.id')
        ->select('vuelos.id', 'aerolineas.descripcion as aerolinea', 'aorigen.descripcion as aorigen','adestino.descripcion as adestino', 'vuelos.fecha_salida', 'vuelos.fecha_llegada', 'vuelos.maximo_pasajeros', 'vuelos.created_at', 'vuelos.updated_at')
        ->first();

        if (empty($vuelo)) {
            Flash::error('Vuelo not found');

            return redirect(route('vuelos.index'));
        }

        return view('vuelos.show')->with('vuelo', $vuelo);
    }

    /**
     * Show the form for editing the specified vuelo.
     */
    public function edit($id)
    {
        $vuelo = $this->vueloRepository->find($id);

        if (empty($vuelo)) {
            Flash::error('Vuelo not found');

            return redirect(route('vuelos.index'));
        }

        return view('vuelos.edit')->with('vuelo', $vuelo);
    }

    /**
     * Update the specified vuelo in storage.
     */
    public function update($id, UpdatevueloRequest $request)
    {
        $vuelo = $this->vueloRepository->find($id);

        if (empty($vuelo)) {
            Flash::error('Vuelo not found');

            return redirect(route('vuelos.index'));
        }

        $vuelo = $this->vueloRepository->update($request->all(), $id);

        Flash::success('Vuelo updated successfully.');

        return redirect(route('vuelos.index'));
    }

    /**
     * Remove the specified vuelo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vuelo = $this->vueloRepository->find($id);

        if (empty($vuelo)) {
            Flash::error('Vuelo not found');

            return redirect(route('vuelos.index'));
        }

        $this->vueloRepository->delete($id);

        Flash::success('Vuelo deleted successfully.');

        return redirect(route('vuelos.index'));
    }
}
