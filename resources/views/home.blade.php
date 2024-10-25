@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h1 class="text-black-50">¡Bienvenido!</h1>
    <div class="mt-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="small-box bg-info" onclick="window.location.href=`{{route('aerolineas.index')}}`">
                        <div class="inner">
                            <h3>Aerolineas</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <div class="small-box-footer">
                            <i class="fas fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-success" onclick="window.location.href=`{{route('aeropuertos.index')}}`">
                        <div class="inner">
                            <h3>Aeropuertos</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="small-box-footer">
                            <i class="fas fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-dark" onclick="window.location.href=`{{route('departamentos.index')}}`">
                        <div class="inner">
                            <h3>Departamentos</h3>
                        </div>
                        <div class="icon text-white">
                            <i class="far fa-map"></i>
                        </div>
                        <div class="small-box-footer">
                            <i class="fas fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-danger" onclick="window.location.href=`{{route('municipios.index')}}`">
                        <div class="inner">
                            <h3>Municipios</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-map-marked"></i>
                        </div>
                        <div class="small-box-footer">
                            <i class="fas fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-primary" onclick="window.location.href=`{{route('vuelos.index')}}`">
                        <div class="inner">
                            <h3>Vuelos</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <div class="small-box-footer">
                            <i class="fas fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-warning" onclick="window.location.href=`{{route('paquetes.index')}}`">
                        <div class="inner">
                            <h3>Paquetes</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-archive"></i>
                        </div>
                        <div class="small-box-footer">
                            <i class="fas fa-arrow-circle-right "></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-info" onclick="window.location.href=`{{route('clases.index')}}`">
                        <div class="inner">
                            <h3>Clases</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-cocktail"></i>
                        </div>
                        <div class="small-box-footer">
                            <i class="fas fa-arrow-circle-right "></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-success" onclick="window.location.href=`{{route('pasajeros.index')}}`">
                        <div class="inner">
                            <h3>Pasajeros</h3>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="small-box-footer">
                            <i class="fas fa-arrow-circle-right "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection