@extends('layouts.navbar')
@section('content')
<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">

<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fichamedica.css') }}" rel="stylesheet">

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado con contorno</title>
    <link href="{{ asset('css/justificantes.css') }}" rel="stylesheet">
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
        <div class="contenedor">
            <div class="alumno">
                Nombre del alumno
            </div>        
            <div class="iptalumno">
                <input type="text" name="iptalumno" id="iptalumno">        
            </div>
        </div>
    </div>
</body>
</html>
        