<x-laravel-ui-adminlte::adminlte-layout>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <body class="hold-transition register-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><img src="{{ asset('images/logo.png')}}" alt="logo" class="logo-png"
                        style="width: 200px !important; max-width: 100% !important; height: auto;"></a>
            </div>
            <div class="container">
                <div class="heading">Registro de Nuevo Usuario</div>
                <form method="post" action="{{ route('register') }}" class="form">
                    @csrf

                    <!-- Grupo de input con ícono para el nombre -->
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                        <input required class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name"
                            placeholder="Nombre Completo" value="{{old('name')}}">
                        @error('name')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Grupo de input con ícono para el correo electrónico -->
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input required class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                            id="email" placeholder="Correo Electrónico" value="{{old('email')}}">
                        @error('email')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Grupo de input con ícono para la contraseña -->
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input required class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                            id="password" placeholder="Contraseña">
                        @error('password')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input required class="form-control" type="password" name="password_confirmation"
                            id="password" placeholder="Confirmación de Contraseña">
                       
                    </div>
                    <span class="forgot-password">
                        <a href="{{ route('login') }}">Ya tengo una cuenta</a>
                    </span>

                    <input class="login-button" type="submit" value="Iniciar Sesion">
                </form>
            </div>
        </div>
    </body>
</x-laravel-ui-adminlte::adminlte-layout>
