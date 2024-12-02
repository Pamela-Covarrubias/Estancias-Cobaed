@extends('layouts.sidebar')
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
    <div class="cuadrado" style="height: 1750px;">
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
            <div class="estu-input">
                <div class="estu">
                    Nombre del Alumno
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptestu">
                    <input type="text" name="iptestu" id="iptestu">        
                </div>
            </div>
        </div>

        <div class="contenedor">
            <div class="semestre-input">
                <div class="semestre">
                    Semestre
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptsemestre">
                    <input type="text" name="iptsemestre" id="iptsemestre">        
                </div>
            </div>
            <div class="turno-input">
                <div class="turno">
                    Turno
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptturno">
                    <input type="text" name="iptturno" id="iptturno">        
                </div>
            </div>
        </div>  

        <div class="contenedor">
            <div class="telefono-input">
                <div class="telefono">
                    Teléfono Fijo
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="ipttelefono">
                    <input type="text" name="ipttelefono" id="ipttelefono">        
                </div>
            </div>
            <div class="celular-input">
                <div class="celular">
                    Celular
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptcelular">
                    <input type="text" name="iptcelular" id="iptcelular">        
                </div>
            </div>
        </div> 

        <div class="contenedor">
            <div class="direccion-input">
                <div class="direccion">
                    Dirección
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptdireccion">
                    <input type="text" name="iptdireccion" id="iptdireccion">        
                </div>
            </div>
        </div>
        
        <div class="contenedor">
            <div class="emergy-input">
                <div class="emergy">
                    EN CASO DE EMERGENCIA  COMUNICARSE AL NÚMERO
                </div>        
                <div class="linea-separaciondir"></div> <!-- Línea vertical -->
                <div class="iptemergy">
                    <input type="text" name="iptemergy" id="iptemergy">        
                </div>
            </div>
        </div>
        <div class="Contenedorsalud">
            <div class="grlsalud">
                ESTADO GENERAL DE SALUD
            </div>
            <div class="salud-input">
                <div class="salud">
                    Grupo Sanguineo
                </div>        
                <div class= "linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptsalud">
                    <input type="text" name="iptsalud" id="iptsalud">        
                </div>
            </div>
        </div>
        
        <div class="padecimientos">
            Si tienes alguno de estos padecimientos, por marca con una X
        </div>

        <div class="contenedor">
            <div class="hepatitis-input">
                <div class="hepatitis">
                    Hepatitis
                </div>        
                <div class="linea-separacion"></div>
                <div class="ipthepatitis">
                    <input type="text" name="ipthepatitis" id="ipthepatitis">        
                </div>
            </div>
            <div class="gastritis-input">
                <div class="gastritis">
                    Gastritis
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptgastritis">
                    <input type="text" name="iptgastritis" id="iptgastritis">        
                </div>
            </div> 
        </div>

        <div class="contenedor">
            <div class="anemia-input">
                <div class="anemia">
                    Anemia
                </div>        
                <div class="linea-separacion"></div>
                <div class="iptanemia">
                    <input type="text" name="iptanemia" id="iptanemia">        
                </div>
            </div>
            <div class="diabetes-input">
                <div class="diabetes">
                    Diabetes
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptdiabetes">
                    <input type="text" name="iptdiabetes" id="iptdiabetes">        
                </div>
            </div> 
        </div>

        <div class="contenedor">
            <div class="ha-input">
                <div class="ha">
                    Hipertensión Arterial   
                </div>        
                <div class="linea-separacion"></div>
                <div class="iptha">
                    <input type="text" name="iptha" id="iptha">        
                </div>
            </div>
            <div class="epilepsia-input">
                <div class="epilepsia">
                    Epilepsia
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptepilepsia">
                    <input type="text" name="iptepilepsia" id="iptepilepsia">        
                </div>
            </div> 
        </div>

        <div class="contenedor">
            <div class="asma-input">
                <div class="asma">
                    Asma   
                </div>        
                <div class="linea-separacion"></div>
                <div class="iptasma">
                    <input type="text" name="iptasma" id="iptasma">        
                </div>
            </div>
            <div class="respiratorias-input">
                <div class="respiratorias">
                    Respiratorias
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptrespiratorias">
                    <input type="text" name="iprespiratorias" id="iptrespiratorias">        
                </div>
            </div> 
        </div>
        <div class="especifico">
            Otra enfermedad gástrica, cardiaca etc. Especificar por favor:
            <div class="iptenfespecifico">
                <input type="text" name="iptenfespecifico" id="iptenfespecifico"> 
            </div>
        </div>

        <div class="Contenedorsalud">
            <div class="grlsalud">
                ALERGIAS A:
            </div>  
        </div> 

        <div class="contenedor">
            <div class="antibiotico-input">
                <div class="antibiotico">
                    Antibióticos
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptantibiotico">
                    <label>
                        <input type="radio" name="antibiotico" value="si"> Sí
                    </label>
                </div>
            </div>
            <div class="antibiotico-input">
                <div class="antibioticono">
                    <label>
                        <input type="radio" name="antibioticono" value="no"> No
                    </label>
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptcualanti">
                    <input type="text" name="iptantibiotico" id="iptcualanti" placeholder="¿Cuál?">        
                </div>
            </div>
        </div>

        <div class="contenedor">
            <div class="medicamento-input">
                <div class="medicamento">
                    Medicamentos
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptmedicamento">
                    <label>
                        <input type="radio" name="medicamento" value="si"> Sí
                    </label>
                </div>
            </div>
            <div class="medicamento-input">
                <div class="medicamentono">
                    <label>
                        <input type="radio" name="medicamentono" value="no"> No
                    </label>
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptcualmedi">
                    <input type="text" name="iptmedicamento" id="iptcualmedi" placeholder="¿Cuál?">        
                </div>
            </div>
        </div>

        <div class="contenedor">
            <div class="alimento-input">
                <div class="alimento">
                    Alimento
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptalimento">
                    <label>
                        <input type="radio" name="alimento" value="si"> Sí
                    </label>
                </div>
            </div>
            <div class="alimento-input">
                <div class="alimentono">
                    <label>
                        <input type="radio" name="alimentono" value="no"> No
                    </label>
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptcualalimento">
                    <input type="text" name="iptalimento" id="iptcualalimento" placeholder="¿Cuál?">        
                </div>
            </div>
        </div>

        <div class="contenedor">
            <div class="animales-input">
                <div class="animales">
                    Animales
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptanimales">
                    <label>
                        <input type="radio" name="animales" value="si"> Sí
                    </label>
                </div>
            </div>
            <div class="animales-input">
                <div class="animalesno">
                    <label>
                        <input type="radio" name="animalesno" value="no"> No
                    </label>
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptcualanimal">
                    <input type="text" name="iptanimales" id="iptcualanimal" placeholder="¿Cuál?">        
                </div>
            </div>
        </div>

        <div class="contenedor">
            <div class="picaduras-input">
                <div class="picaduras">
                    Picaduras
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptpicaduras">
                    <label>
                        <input type="radio" name="picaduras" value="si"> Sí
                    </label>
                </div>
            </div>
            <div class="picaduras-input">
                <div class="picadurasno">
                    <label>
                        <input type="radio" name="picadurasno" value="no"> No
                    </label>
                </div>        
                <div class="linea-separacion"></div> <!-- Línea vertical -->
                <div class="iptcualpica">
                    <input type="text" name="iptpicaduras" id="iptcualpica" placeholder="¿Cuál?">        
                </div>
            </div>
        </div>
        <div class="contenedorAP">
                <div class="psicologico-input">
                <div class="psicologico">
                    APARTADO PSICOLÓGICO
                </div>
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
                </div>
            <div class="diagnostico-input">
                <div class="diagnostico">
                    DIAGNÓSTICO
                </div>
                <div class="separacion"></div>
            </div>
            <div class="seguimiento-input">
                <div class="seguimiento">
                    SEGUIMIENTO
                </div>
            </div>
        </div>

        <div class="contenedorAPS">
            <div class="depresion-input">
                <div class="depresion">
                    Depresión
                </div>
                <div class="opciones">
                    <label><input type="radio" name="otra" value="si"> Sí</label>
                    <label><input type="radio" name="otra" value="no"> No</label>
                </div>
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
            </div>
            <div class="diagnostico-input">
                <div class="diagnosticodepre">
                    <div class="iptdiadepre">
                        <input type="text" name="iptdiadepre" id="iptdiadepre">        
                    </div>
                </div>
                <div class="separacion"></div>
            </div>
            <div class="seguimiento-input">
                <div class="seguimientodepre">
                    <div class="iptseguidepre">
                        <input type="text" name="iptseguidepre" id="iptseguidepre">        
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedorAPS">
            <div class="depresion-input">
                <div class="ansiedad">
                    Ansiedad
                </div>
                <div class="opciones">
                    <label><input type="radio" name="otra" value="si"> Sí</label>
                    <label><input type="radio" name="otra" value="no"> No</label>
                </div>
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
            </div>
            <div class="diagnostico-input">
                <div class="diagnosticodepre">
                    <div class="iptdiaansi">
                        <input type="text" name="iptdiaansi" id="iptdiaansi">        
                    </div>
                </div>
                <div class="separacion"></div>
            </div>
            <div class="seguimiento-input">
                <div class="seguimientodepre">
                    <div class="iptseguidepre">
                        <input type="text" name="iptseguidepre" id="iptseguidepre">        
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedorAPS">
            <div class="depresion-input">
                <div class="TA">
                    Transtornos alimenticios (anorexia y/o bulimia)
                </div>
                <div class="opciones">
                    <label><input type="radio" name="otra" value="si"> Sí</label>
                    <label><input type="radio" name="otra" value="no"> No</label>
                </div>
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
            </div>
            <div class="diagnostico-input">
                <div class="diagnosticodepre">
                    <div class="iptdiaTA">
                        <input type="text" name="iptdiaTA" id="iptdiaTA">        
                    </div>
                </div>
                <div class="separacion"></div>
            </div>
            <div class="seguimiento-input">
                <div class="seguimientodepre">
                    <div class="iptseguidepre">
                        <input type="text" name="iptseguidepre" id="iptseguidepre">        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="contenedorAPS">
            <div class="depresion-input">
                <div class="fobias">
                    Fobias
                </div>
                <div class="opciones">
                    <label><input type="radio" name="otra" value="si"> Sí</label>
                    <label><input type="radio" name="otra" value="no"> No</label>
                </div>
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
            </div>
            <div class="diagnostico-input">
                <div class="diagnosticodepre">
                    <div class="iptdiafobia">
                        <input type="text" name="iptdiafobia" id="iptdiafobia">        
                    </div>
                </div>
                <div class="separacion"></div>
            </div>
            <div class="seguimiento-input">
                <div class="seguimientodepre">
                    <div class="iptseguidepre">
                        <input type="text" name="iptseguidepre" id="iptseguidepre">        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="contenedorAPS">
            <div class="depresion-input">
                <div class="TDH">
                    Transtorno de Déficit 
                    de Atención (TDH)
                </div>
                <div class="opciones">
                    <label><input type="radio" name="otra" value="si"> Sí</label>
                    <label><input type="radio" name="otra" value="no"> No</label>
                </div>
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
            </div>
            <div class="diagnostico-input">
                <div class="diagnosticodepre">
                    <div class="iptdiaTDH">
                        <input type="text" name="iptdiaTDH" id="iptdiaTDH">        
                    </div>
                </div>
                <div class="separacion"></div>
            </div>
            <div class="seguimiento-input">
                <div class="seguimientodepre">
                    <div class="iptseguidepre">
                        <input type="text" name="iptseguidepre" id="iptseguidepre">        
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedorAPS">
            <div class="depresion-input">
                <div class="otra">
                    Otra (especifica)
                </div>
                <div class="opciones">
                    <label><input type="radio" name="otra" value="si"> Sí</label>
                    <label><input type="radio" name="otra" value="no"> No</label>
                </div>
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
            </div>
            <div class="diagnostico-input">
                <div class="diagnosticodepre">
                    <div class="iptdiaotra">
                        <input type="text" name="iptdiaotra" id="iptdiaotra">        
                    </div>
                </div>
                <div class="separacion"></div>
            </div>
            <div class="seguimiento-input">
                <div class="seguimientodepre">
                    <div class="iptseguidepre">
                        <input type="text" name="iptseguidepre" id="iptseguidepre">        
                    </div>
                </div>
            </div>
        </div>

        <div class="padecimientos">
            Si tienes alguno de estos padecimientos, por marca con una X
        </div>

        <div class="contenedorAPS">
            <div class="depresion-input">
                <div class="ecronica">
                    Padece álguna enfermedad crónica
                </div>
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
            </div>
            <div class="diagnostico-input">
                <div class="diagnosticodepre">
                    <div class="iptdiaecronica">
                        <label>
                            <input type="radio" name="iptdiaecronica" value="si"> Sí
                        </label>                    
                    </div>
                </div>
                <div class="separacion"></div>
            </div>
            <div class="seguimiento-input">
                <div class="seguimientodepre">
                    <div class="iptdiaecronicano">
                        <label>
                            <input type="radio" name="iptdiaecronicano" value="no"> No
                        </label>                    
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedorAPS">
            <div class="depresion-input">
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
            </div>
            <div class="diagnostico-input">
                <div class="diagnosticodepre">
                    ¿Cuál?
                    <div class="iptdiaotra">
                        <input type="text" name="iptdiaotra" id="iptdiaotra">        
                    </div>
                </div>
                <div class="separacion"></div>
            </div>
            <div class="seguimiento-input">
                <div class="seguimientodepre">
                    <div class="iptseguidepre">
                        <input type="text" name="iptseguidepre" id="iptseguidepre">        
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedorAPS">
            <div class="depresion-input">
                <div class="medicamento-cotidiano">
                    Toma algún medicamento cotidianamente
                </div>
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
            </div>
            <div class="diagnostico-input">
                <div class="diagnosticodepre">
                    <div class="iptdiaecronica">
                        <label>
                            <input type="radio" name="iptdiaecronica" value="si"> Sí
                        </label>                    
                    </div>
                </div>
                <div class="separacion"></div>
            </div>
            <div class="seguimiento-input">
                <div class="seguimientodepre">
                    <div class="iptdiaecronicano">
                        <label>
                            <input type="radio" name="iptdiaecronicano" value="no"> No
                        </label>                    
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedorAPS">
            <div class="depresion-input">
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
            </div>
            <div class="diagnostico-input">
                <div class="diagnosticodepre">
                    ¿Cuál?
                    <div class="iptdiaotra">
                        <input type="text" name="iptdiaotra" id="iptdiaotra">        
                    </div>
                </div>
                <div class="separacion"></div>
            </div>
            <div class="seguimiento-input">
                <div class="seguimientodepre">
                    <div class="iptseguidepre">
                        <input type="text" name="iptseguidepre" id="iptseguidepre">        
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedorAPS">
            <div class="depresion-input">
            Dosificación
                <div class="separacion-psicologico"></div> <!-- Línea solo para Apartado Psicológico -->
            </div>
            <div class="diagnostico-input">
                <div class="diagnosticodepre">
                    <div class="iptdiaotra">
                        <input type="text" name="iptdiaotra" id="iptdiaotra">        
                    </div>
                </div>
            </div>
        </div>
        <div class="padecimientos">
            Si tienes alguno de estos padecimientos, por marca con una X
        </div>
        <div class="iptobservaciones">
            <input type="text" name="iptobservaciones" id="iptobservaciones"> 
        </div>
        <div class="padres">
            <div class="firma-tutor">
                Nombre y Firma del Padre de Familia o Tutor
                <div class="iptfirma-tutor">
                    <input type="text" name="iptfirma-tutor" id="iptfirma-tutor"> 
                </div>
            </div>
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
</body>
</html>