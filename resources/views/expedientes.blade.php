@extends('layouts.sidebar')
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
            <button type="submit" class="btn-custom">
                Guardar
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 573.75 573.75" fill="currentColor">
                    <g>
                        <path d="M606.157,120.824L489.908,4.575c-2.46-2.46-6.612-4.152-10.764-4.152H434.32H175.988H40.672
                            C18.222,0.423,0,18.721,0,41.095v529.734c0,22.45,18.298,40.672,40.672,40.672h86.341h368.661h75.577
                            c22.45,0,40.672-18.299,40.672-40.672V131.665C611.077,128.359,609.463,124.207,606.157,120.824z M419.328,31.177v136.162
                            c0,0.846-0.846,0.846-0.846,0.846h-42.363V31.177H419.328z M344.596,31.177v137.008H192.595c-0.846,0-0.846-0.846-0.846-0.846
                            V31.177H344.596z M141.929,580.9V390.688c0-35.674,29.062-64.737,64.737-64.737h208.434c35.674,0,64.737,29.062,64.737,64.737
                            v190.135H141.929V580.9z M580.401,570.905c0,4.997-4.152,9.995-9.995,9.995h-59.816V390.688c0-52.281-43.209-95.49-95.49-95.49
                            H207.511c-52.281,0-95.49,43.209-95.49,95.49v190.135H40.595c-4.997,0-9.995-4.152-9.995-9.995V41.095
                            c0-4.997,4.152-9.995,9.995-9.995h120.401v136.162c0,17.453,14.147,31.523,31.523,31.523h225.886
                            c17.453,0,31.523-14.147,31.523-31.523V31.177h23.219l107.1,107.1L580.401,570.905L580.401,570.905z M422.634,490.33
                            c0,8.304-6.612,14.916-14.916,14.916H217.506c-8.304,0-14.916-6.612-14.916-14.916c0-8.303,6.612-14.916,14.916-14.916h189.289
                            C415.945,475.415,422.634,482.027,422.634,490.33z M422.634,410.678c0,8.303-6.612,14.916-14.916,14.916H217.506
                            c-8.304,0-14.916-6.612-14.916-14.916s6.612-14.916,14.916-14.916h189.289C415.945,394.84,422.634,401.529,422.634,410.678z"/>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                </span>
            </button>
            <button type="submit" class="btn-pdf">
                Imprimir
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 573.75 573.75" fill="currentColor">
                        <g>
                            <g>
                                <rect x="143.438" y="439.875" width="286.875" height="19.125"/>
                                <rect x="143.438" y="497.25" width="286.875" height="19.125"/>
                                <circle cx="449.438" cy="267.75" r="19.125"/>
                                <path d="M506.812,172.125h-38.25V38.25c0-21.038-17.213-38.25-38.25-38.25H143.438c-21.038,0-38.25,17.212-38.25,38.25v133.875
                                    h-38.25c-32.513,0-57.375,24.862-57.375,57.375v172.125C9.562,434.138,34.425,459,66.938,459h38.25v76.5
                                    c0,21.037,17.212,38.25,38.25,38.25h286.875c21.037,0,38.25-17.213,38.25-38.25V459h38.25c32.513,0,57.375-24.862,57.375-57.375
                                    V229.5C564.188,196.987,539.325,172.125,506.812,172.125z M124.312,38.25c0-9.562,7.65-19.125,19.125-19.125h286.875
                                    c9.562,0,19.125,7.65,19.125,19.125v133.875H124.312V38.25z M449.438,535.5c0,9.562-7.65,19.125-19.125,19.125H143.438
                                    c-9.562,0-19.125-7.65-19.125-19.125V401.625h325.125V535.5z M545.062,401.625c0,21.037-17.213,38.25-38.25,38.25h-38.25V382.5
                                    H105.188v57.375h-38.25c-21.038,0-38.25-17.213-38.25-38.25V229.5c0-21.038,17.212-38.25,38.25-38.25h439.875
                                    c21.037,0,38.25,17.212,38.25,38.25V401.625z"/>
                            </g>
                        </g>
                    </svg>
                </span>
            </button>
        </div>
    </div>
    </div>
</body>
</html>