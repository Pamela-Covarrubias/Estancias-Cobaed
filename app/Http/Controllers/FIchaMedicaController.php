<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FichaMedica; // Asegúrate de tener el modelo

class FichaMedicaController extends Controller
{
    public function store(Request $request)
    {
        // Validación opcional para los campos
        $validated = $request->validate([
            'antibiotico' => 'required|string', // Validamos que se haya seleccionado 'Sí' o 'No'
            'antibioticono' => 'nullable|string', // El campo 'antibioticono' es opcional, pero debe validarse si se selecciona
            'iptantibiotico' => 'nullable|string', // El campo "¿Cuál?" es opcional
        ]);

        // Crear una nueva instancia del modelo FichaMedica
        $fichaMedica = new FichaMedica();

        // Asignamos los valores del formulario a las propiedades del modelo
        $fichaMedica->antibiotico = $request->input('antibiotico'); // 'si' o 'no'
        $fichaMedica->antibioticono = $request->input('antibioticono'); // 'si' o 'no', según lo seleccionado
        
        // Si el valor de 'antibiotico' es 'si', guardamos el valor de 'iptantibiotico'
        if ($request->input('antibiotico') === 'si') {
            $fichaMedica->iptantibiotico = $request->input('iptantibiotico');
        } else {
            $fichaMedica->iptantibiotico = null; // Si no selecciona 'sí', no guardamos nada en este campo
        }

        // Guardamos la ficha médica en la base de datos
        $fichaMedica->save();

        // Redirigimos a una página de éxito o mostramos un mensaje
        return redirect()->route('fichamedica.success'); // Asegúrate de tener esta ruta definida
    }
}

