@extends('layouts.navbar')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canalización</title>
    <link rel="stylesheet" href="styles.css">
    <link href="{{ asset('css/canalizaciones.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="image">
            <img src="https://pbs.twimg.com/media/FdM4W4MXkAE9-_Y.jpg" style="width: 200px; height: auto;  text-align: center;" alt="">
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
        <div class="body">
            <div class="primero">
                <p>Plantel 34 Villas del Gaudiana</p>
                <p>Clave: 10ECB0034O</p>
            </div>
            <div class="header">
                <p>LIC. PSIC. MA. EUGENIA AVILA HURTADO</p>
                <p>DIRECTORA UNEME CAPA NORTE</p>
                <p>PRESENTE.-</p>
            </div>
            <div class="solicitud">
                Por medio de este presente le solicito su apoyo para que se atienda al
            </div>
            <p><input type="text" id="estudiante" name="estudiante">, quien</p>
            <div class="sintoma">
                <p>es estudiante de este plantel y se identifica con síntomas de
                <input type="text" id="sintomas" name="sintomas"></p>
            </div>
            <div class="sangria">
                <p>Le solicito su apoyo para que el presente documento me lo firme de recibido y si es</p>
            </div>
            <div class="atencion">
                <p> posible su atención, me puede enviar comprobantes de atención.</p>
            </div>
            <div class="sangria">
                <p>Sin más por el momento me despido de usted no sin antes agradecerle su apoyo. Le</p>
            </div>
            <div class=" sintoma">
                <p>dejo mi teléfono de oficina para cualquier aclaración del caso.</p>
            </div>
            <div class="num">
                <p>Orientación educativa COBAED Villas del Guadiana: 1 37 38 76</p>
            </div>
        </div>
        <div class="ATTE">
            <p><strong>ATENTAMENTE</strong></p>
        </div>
        <div class="Psic">
            <p> PSIC, BRENDA A. ESPINOZA DE LOS MOTEROS FUENTES</p>
            <p>ORIENTADORA EDUCATIVA</p>
        </div>
    </div>
</body>
</html>
