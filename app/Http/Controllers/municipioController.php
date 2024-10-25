<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemunicipioRequest;
use App\Http\Requests\UpdatemunicipioRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\municipioRepository;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use app\Models\municipio;

class municipioController extends AppBaseController
{
    /** @var municipioRepository $municipioRepository*/
    private $municipioRepository;

    public function __construct(municipioRepository $municipioRepo)
    {
        $this->municipioRepository = $municipioRepo;
    }

    /**
     * Display a listing of the municipio.
     */
    public function index(Request $request)
    {
               $municipios = DB::table('municipios')
               ->join('departamentos', 'municipios.iddepto', '=', 'departamentos.id')
               ->select('municipios.id', 'departamentos.descripcion', 'municipios.municipio')
               ->paginate(10);
   
           return view('municipios.index')
               ->with('municipios', $municipios);   
   
    }

    /**
     * Show the form for creating a new municipio.
     */
    public function create()
    {
        return view('municipios.create');
    }

    /**
     * Store a newly created municipio in storage.
     */
    public function store(CreatemunicipioRequest $request)
    {
        $input = $request->all();

        $municipio = $this->municipioRepository->create($input);

        Flash::success('Municipio saved successfully.');

        return redirect(route('municipios.index'));
    }

    /**
     * Display the specified municipio.
     */
    public function show($id)
    {
        $municipio = municipio::where('municipios.id', $id)
        ->join('departamentos', 'municipios.iddepto', '=', 'departamentos.id')
        ->select('municipios.id','departamentos.descripcion','municipios.municipio','municipios.created_at','municipios.updated_at')->first();

        if (empty($municipio)) {
            Flash::error('municipio no encontrado');

            return redirect(route('municipios.index'));
        }

        return view('municipios.show')->with('municipio', $municipio);
   }

    /**
     * Show the form for editing the specified municipio.
     */
    public function edit($id)
    {
        $municipio = $this->municipioRepository->find($id);

        if (empty($municipio)) {
            Flash::error('Municipio not found');

            return redirect(route('municipios.index'));
        }

        return view('municipios.edit')->with('municipio', $municipio);
    }

    /**
     * Update the specified municipio in storage.
     */
    public function update($id, UpdatemunicipioRequest $request)
    {
        $municipio = $this->municipioRepository->find($id);

        if (empty($municipio)) {
            Flash::error('Municipio not found');

            return redirect(route('municipios.index'));
        }

        $municipio = $this->municipioRepository->update($request->all(), $id);

        Flash::success('Municipio updated successfully.');

        return redirect(route('municipios.index'));
    }

    /**
     * Remove the specified municipio from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $municipio = $this->municipioRepository->find($id);

        if (empty($municipio)) {
            Flash::error('Municipio not found');

            return redirect(route('municipios.index'));
        }

        $this->municipioRepository->delete($id);

        Flash::success('Municipio deleted successfully.');

        return redirect(route('municipios.index'));
    }
}
