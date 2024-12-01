<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet"> <!-- Estilos del Navbar -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet"> <!-- Estilos del Login -->
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <a href="{{ route('login') }}">
                <img src="https://pbs.twimg.com/media/ElWOfaJXIAAqY__.png" alt="Logo" class="navbar-logo">
            </a>
        </nav>
    </header>

    <!-- Contenedor del Login -->
    <div class="login-container">
        <div class="login-content">
            <!-- Imagen a la izquierda -->
            <div class="login-image">
                <img src="https://cdn.pixabay.com/photo/2014/03/25/16/54/user-297566_640.png" alt="Usuario">
            </div>
            <!-- Formulario a la derecha -->
            <div class="login-form">
                <h1>Iniciar Sesión</h1>
                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">Nombre de Usuario:</label>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" placeholder="********" required>
                    </div>
                    <button type="submit" class="btn-login">Iniciar Sesión</button>
                    @if ($errors->has('login'))
                        <div class="alert alert-danger">
                            {{ $errors->first('login') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</body>
</html>