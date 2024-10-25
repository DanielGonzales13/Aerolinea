<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\View;
use App\Models\departamento;
use App\Models\municipio;
use App\Models\aerolinea;
use App\Models\aeropuerto;
use App\Models\vuelo;
use App\Models\clase;
use App\Models\paquete;
use App\Models\pasajero;
use App\Models\colaborador;
use App\Models\reservacion;
use App\Models\vuelo_colaborador;
use App\Models\beneficio;
use DB;
use Response;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['municipios.fields'], function ($view) {
            $departamentoItems = departamento::pluck('descripcion','id')->toArray();
            $view->with('departamentoItems', $departamentoItems);
        });

        View::composer(['aeropuertos.fields'], function ($view) {
            $departamentoItems = departamento::pluck('descripcion','id')->toArray();
            $view->with('departamentoItems', $departamentoItems);
        });

        View::composer(['aeropuertos.fields'], function ($view) {
            $municipioItems = municipio::pluck('municipio','id')->toArray();
            $view->with('municipioItems', $municipioItems);
        });

        /* VUELOS FIELDS */

        View::composer(['vuelos.fields'], function ($view) {
            $aerolineaItems = aerolinea::pluck('descripcion','id')->toArray();
            $view->with('aerolineaItems', $aerolineaItems);
        });

        View::composer(['vuelos.fields'], function ($view) {
            $aeropuertoOrigenItems = aeropuerto::pluck('descripcion','id')->toArray();
            $view->with('aeropuertoOrigenItems', $aeropuertoOrigenItems);
        });

        View::composer(['vuelos.fields'], function ($view) {
            $aeropuertoDestinoItems = aeropuerto::pluck('descripcion','id')->toArray();
            $view->with('aeropuertoDestinoItems', $aeropuertoDestinoItems);
        });

        /* BENEFICIOS FIELDS*/ 
        View::composer(['beneficios.fields'], function ($view) {
            $claseItems = clase::pluck('descripcion','id')->toArray();
            $view->with('claseItems', $claseItems);
        });

        /* RESERVACIONES FIELDS */

        View::composer(['reservacions.fields'], function ($view) {
                $pasajeroItem = pasajero::select(DB::raw("CONCAT(primerNombre, ' ', segundoNombre, ' ', primerApellido, ' ', segundoApellido) as pasajero"), 'id')
                    ->get()
                    ->pluck('pasajero', 'id')
                    ->toArray();  
                $view->with('pasajeroItem', $pasajeroItem);
        });

        View::composer(['reservacions.fields'], function ($view) {
            $paqueteItem = paquete::pluck('descripcion','id')->toArray();
            $view->with('paqueteItem', $paqueteItem);
        });

        View::composer(['reservacions.fields'], function ($view) {
            $claseItem = clase::pluck('descripcion','id')->toArray();
            $view->with('claseItem', $claseItem);
        });

        /* VUELO DE COLABORADOR */
        View::composer(['vuelo_colaboradors.fields'], function ($view) {
            $vueloItem = vuelo::select(
                DB::raw("CONCAT(aeropuerto_origen.descripcion, ' - ', aeropuerto_destino.descripcion) as origenDestino"),
                'vuelos.id'
            )
            ->join('aeropuertos as aeropuerto_origen', 'vuelos.idaeropuerto_origen', '=', 'aeropuerto_origen.id')
            ->join('aeropuertos as aeropuerto_destino', 'vuelos.idaeropuerto_destino', '=', 'aeropuerto_destino.id')
            ->get()
            ->pluck('origenDestino', 'id')
            ->toArray();
            $view->with('vueloItem', $vueloItem);
        });
        
        View::composer(['vuelo_colaboradors.fields'], function ($view) {
            $colaboradorItem = colaborador::select(DB::raw("CONCAT(primerNombre, ' ', segundoNombre, ' ', primerApellido, ' ', segundoApellido) as colaborador"), 'id')
            ->get()
            ->pluck('colaborador', 'id')
            ->toArray();              
            $view->with('colaboradorItem', $colaboradorItem);
        });

    }
}
