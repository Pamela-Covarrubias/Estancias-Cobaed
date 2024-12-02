@extends('layouts.navbar')

@section('content')
<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado con contorno</title>
    <link href="{{ asset('css/reportejustificantes.css') }}" rel="stylesheet">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="cuadrado">
        <div class="square">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJRj7pvct0dz9gl10oXaNLywYHAJv5fSgYwQ&s" alt="">
            <div class="text">
                <p>COLEGIO DE BACHILLERES DEL ESTADO DE DURANGO </p>
                <p>PLANTEL 34 “VILLAS DEL GUADIANA”</p>
                <p>2024</p>
            </div>
        </div>  
        <div class="date">
            <p>DURANGO, DGO., A
                <input type="text" name="day" id="day" require>
                DE
                <input type="text" name="month" id="month" require>
                DE
                <input type="text" name="year" id="year" require>
            </p>
        </div>
        <div class="name">
            <div class="alumno">
                <p>Nombre del Aumno
                    <input type="text" name="textalumno" id="textalumno">
                </p>
            </div>
        </div>
        
        <div class="enrollment">
            <div class="matricula">
                <p>Matricula
                    <input type="number" name="matricula" id="matricula" inputmode="numeric" required>
                </p>
            </div>
        </div>

        <div class="teacher">
            <div class="report">
                <p>Docente que reportó
                    <input type="text" name="textteacher" id="textteacher">
                </p>
            </div>
        </div>
        <div class="notes">
            <div class="notas">
                <p>Notas</p>
            </div>
        </div>
        <div class="notastxt">
            <input type="text" name="notastxt" id="notastxt">
        </div>
        <div class="guardar">
            <button type="submit" class="btn-custom">Guardar</button>
        </div>
    </div>
    </div>
</body>
</html>