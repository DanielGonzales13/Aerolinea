<x-laravel-ui-adminlte::adminlte-layout>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo-png"
                        style="width: 200px !important; max-width: 100% !important; height: auto;">
                </a>
            </div>

            <div class="container">
                <div class="heading">Recuperar Contraseña</div>
                
                <p class="login-box-msg">¿Olvidaste tu contraseña? Aquí puedes restablecerla fácilmente.</p>

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <form action="{{ route('password.email') }}" method="post" class="form">
                    @csrf

                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input required type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                            placeholder="Correo Electrónico" value="{{ old('email') }}">
                        @error('email')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="submit" class="login-button btn btn-primary btn-block" value="Enviar Enlace de Recuperación">
                        </div>
                    </div>
                </form>

                <div class="mt-3">
                    <span class="forgot-password">
                        <a href="{{ route('login') }}">Iniciar Sesión</a>
                    </span>
                    <br>    
                    <span class="forgot-password">
                        <a href="{{ route('register') }}">Crea una nueva cuenta</a>
                    </span>
                </div>
            </div>
        </div>
    </body>
</x-laravel-ui-adminlte::adminlte-layout>
