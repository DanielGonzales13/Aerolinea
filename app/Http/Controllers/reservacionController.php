<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatereservacionRequest;
use App\Http\Requests\UpdatereservacionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\reservacionRepository;
use Illuminate\Http\Request;
use Flash;
use DB;
use Response;
use app\Models\reservacion;

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
        $reservacions = DB::table('reservacions')
        ->join('pasajeros', 'reservacions.idpasajero', '=', 'pasajeros.id')
        ->join('clases', 'reservacions.idclase', '=', 'clases.id')
        ->join('paquetes', 'reservacions.idpaquete', '=', 'paquetes.id')
        ->select('reservacions.id',DB::raw("CONCAT(pasajeros.primerNombre, ' ', pasajeros.segundoNombre, ' ', pasajeros.primerApellido, ' ', pasajeros.segundoApellido) as pasajero"),'reservacions.asiento','clases.descripcion as clase','reservacions.estado','paquetes.descripcion as paquete', 'reservacions.fecha_reserva')->paginate(10);


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
        $reservacion = reservacion::where('reservacions.id', $id)
        ->join('pasajeros', 'reservacions.idpasajero', '=', 'pasajeros.id')
        ->join('clases', 'reservacions.idclase', '=', 'clases.id')
        ->join('paquetes', 'reservacions.idpaquete', '=', 'paquetes.id')
        ->select('reservacions.id',DB::raw("CONCAT(pasajeros.primerNombre, ' ', pasajeros.segundoNombre, ' ', pasajeros.primerApellido, ' ', pasajeros.segundoApellido) as pasajero"),'reservacions.asiento','clases.descripcion as clase','reservacions.estado','paquetes.descripcion as paquete', 'reservacions.fecha_reserva', 'reservacions.created_at','reservacions.updated_at')->first();

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
