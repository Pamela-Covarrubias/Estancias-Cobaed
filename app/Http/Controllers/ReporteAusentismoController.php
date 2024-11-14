<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteAusentismoController extends Controller
{
    public function index()
    {
        return view('reporte_ausentismo');  // Asume que tienes una vista 'reporte_ausentismo.blade.php'
    }
}