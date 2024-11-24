<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar con Imagen</title>
    <link rel="stylesheet" href="styles.css"> <!-- Vincula el archivo CSS -->
</head>
<body>
    <header>
        <nav class="navbar">
            <!-- Enlace con la imagen -->
            <a href="{{route('welcome')}}" >
                <img src="https://pbs.twimg.com/media/ElWOfaJXIAAqY__.png" alt="Logo" class="navbar-logo">
            </a>
        </nav>
    </header>

</body>
</html>

