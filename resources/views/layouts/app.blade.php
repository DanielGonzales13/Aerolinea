<x-laravel-ui-adminlte::adminlte-layout>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    
    <style>
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        padding: 10px !important;
    }

    .btn-xs {
        padding: 0.125rem 0.25rem;
        font-size: 0.75rem;
        line-height: 1.5;
        border-radius: 0.15rem;
        border-top-right-radius: 0.15rem;
        border-bottom-right-radius: 0.15rem;
        font-size: large;
        margin-left: 1rem !important;
        margin-right: 1rem !important;
    }

    /* General table styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 16px;
        text-align: left;
    }

    /* Table header */
    thead th {
        background-color: #5a7ba0;
        color: white;
        padding: 10px;
        text-align: center;
        font-weight: bold;
    }

    /* Table body rows */
    tbody tr {
        border-bottom: 1px solid #ddd;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
        /* Adds alternating row colors */
    }

    /* Table cells */
    td,
    th {
        padding: 12px;
        text-align: center;
    }

    /* Hover effect on rows */
    tbody tr:hover {
        background-color: #ddd;
    }

    /* Action column buttons styling */
    td a {
        text-decoration: none;
        padding: 6px 12px;
        color: white;
        background-color: #4CAF50;
        border-radius: 4px;
        margin: 0 5px;
        display: inline-block;
    }

    td a:hover {
        background-color: #45a049;
    }

    /* Responsive table */
    @media screen and (max-width: 600px) {

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }


        tbody tr {
            margin-bottom: 10px;
        }

        tbody td {
            display: flex;
            justify-content: space-between;
            padding-left: 50%;
            position: relative;
        }

        tbody td:before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            padding-left: 10px;
            font-weight: bold;
        }
    }
    </style>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Main Header -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('images/logo.png')}}" class="user-image img-circle elevation-2"
                                alt="User Image">
                            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-primary">
                                <img src="{{asset('images/logo.png')}}" class="img-circle elevation-2" alt="User Image">
                                <p>
                                    {{ Auth::user()->name }}
                                    <small>Miembro desde {{ Auth::user()->created_at->format('M. Y') }}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                <a href="#" class="btn btn-default btn-flat float-right"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Salir
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    Aerolines
                </div>
                <strong>Copyright &copy; 2024 - Grupo 2 (Denis Gomez - Kevin Gonzales - Luis Fernandez - Luis Rodriguez
                    - Jason Calito).</strong>
            </footer>
        </div>
    </body>
</x-laravel-ui-adminlte::adminlte-layout>