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


    }
}
