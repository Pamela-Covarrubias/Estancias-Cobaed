<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaMedica extends Model
{
    use HasFactory;

    // Define los campos que se pueden llenar de forma masiva (mass assignment)
    protected $fillable = [
        'day', 'month', 'year', 'iptestu','iptsemestre','iptturno','ipttelefono','iptcelular','iptdireccion','iptemergy','iptsalud','ipthepatitis','iptgastritis','iptanemia','iptdiabetes','iptha','iptepilepsia','iptasma','iptrespiratorias','iptenfespecifico','antibiotico','iptantibiotico','antibioticono','medicamento','iptmedicamento','medicamentono','alimento','iptalimento','alimentono','animales','iptanimales','animalesno','picaduras','iptpicaduras','picadurasno',
        'depresion', 'ansiedad', 'ta', 'fobias', 'tdh', 'otra', 'diagnostico_depresion', 
        'seguimiento_depresion', 'diagnostico_ansiedad', 'seguimiento_ansiedad', 'diagnostico_ta', 
        'seguimiento_ta', 'diagnostico_fobias', 'seguimiento_fobias', 'diagnostico_tdh', 
        'seguimiento_tdh', 'diagnostico_otra', 'seguimiento_otra',
        'iptdiaecronica',        // Sí o No para enfermedad crónica
        'iptdiaotra',            // ¿Cuál? - Texto adicional sobre enfermedad
        'iptmedicamento',        // Sí o No para medicamento cotidiano
        'iptmedicamento_otra',   // ¿Cuál? - Texto adicional sobre medicamento
        'dosificacion',  // Agrega todos los campos que necesitas
        // ...
    ];
}
