<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JustificanteController extends Controller
{
    public function index()
    {
        return view('justificantes'); // Asegúrate de que la vista exista en resources/views/justificantes.blade.php
    }
}
