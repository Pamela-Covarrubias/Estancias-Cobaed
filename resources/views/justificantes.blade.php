@extends('layouts.navbar')
@section('content')
<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">

<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/justificantes.css') }}" rel="stylesheet">

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
        <div class="cuerpo">
            <p>C. CATEDRATICO</p>
        </div>
        <div class="alumno">
                <p>POR MEDIO DEL PRESENTE, ME PERMITO DIRIGIRME A USTED, PARA HACER DE SU CONCENTIMIENTO QUE EL TUTOR DEL ALUMNO(A): 
                    <input type="text" id="name" name="name" required>
                </p>
            <label><input type= "checkbox" name="subjects[]" id="RC" value="Receta Médica"> Receta Médica</label><br>
            <label><input type="checkbox" name="subjects[]" id="VP" value="Visita del padre de fam."> Visita del padre de fam.</label><br>
            <label><input type="checkbox" name="subjects[]" id="Cons" value="Nota o constancia de falta"> Nota o constancia de falta</code></label><br>

            <button type="submit">Generar PDF</button>
        </div>
        <div class="Cuadradodos">
            <div class="textd">
                <p>
                    QUE LA(EL) ALUMNA(O) NO ASISTIÓ EL(LOS) DÍAS 
                    <input type="text" id="date" date="date" require> DEL AÑO EN CURSO DEBIDO A 
                    <input type="text" id="reason" reason="reason" require>
                
                </p>
            </div>
        </div>
        <div class="greet">
            <p>SIN MÁS POR EL MOMENTO ME DESPIDO DE USTED ENVIANDOLE UN CORDIAL SALUDO</p>
        </div>
        <div class="ATEE">
            <p>ATENTAMENTE</p>
            <input type="text" name="OE" id="OE"require>
            <div class="OE">
                <p>ORIENTACIÓN EDUCATIVA</p>
            </div>
        </div>
    </div>
</body>
</html>
        