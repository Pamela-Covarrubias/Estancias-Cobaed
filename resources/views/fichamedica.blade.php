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
    <div class="cuadrado" style="height: 1700px;">
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
                    
    </div>
</body>
</html>