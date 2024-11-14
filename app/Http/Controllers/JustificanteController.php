<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JustificanteController extends Controller
{
    public function index()
    {
        return view('justificantes');
    }
}

