<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inicio</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('aerolineas.index') }}" class="nav-link {{ Request::is('aerolineas*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-plane-departure"></i>
        <p>Aerolineas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('departamentos.index') }}" class="nav-link {{ Request::is('departamentos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-map"></i>
        <p>Departamentos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('municipios.index') }}" class="nav-link {{ Request::is('municipios*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-map-marked"></i>
        <p>Municipios</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('aeropuertos.index') }}" class="nav-link {{ Request::is('aeropuertos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-building"></i>
        <p>Aeropuertos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('vuelos.index') }}" class="nav-link {{ Request::is('vuelos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-plane"></i>
        <p>Vuelos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('paquetes.index') }}" class="nav-link {{ Request::is('paquetes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-archive"></i>
        <p>Paquetes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('clases.index') }}" class="nav-link {{ Request::is('clases*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cocktail"></i>
        <p>Clases</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('pasajeros.index') }}" class="nav-link {{ Request::is('pasajeros*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>Pasajeros</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('colaboradors.index') }}" class="nav-link {{ Request::is('colaboradors*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Colaboradores</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('beneficios.index') }}" class="nav-link {{ Request::is('beneficios*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Beneficios</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('reservacions.index') }}" class="nav-link {{ Request::is('reservacions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Reservaciones</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('vuelo_colaboradors.index') }}" class="nav-link {{ Request::is('vueloColaboradors*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Vuelo Colaboradores</p>
    </a>
</li>
