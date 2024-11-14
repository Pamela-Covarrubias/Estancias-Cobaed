<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JustificanteController;
use App\Http\Controllers\ReporteAusentismoController;
use App\Http\Controllers\FichaMedicaController;
use App\Http\Controllers\CanalizacionesController;
use App\Http\Controllers\ExpedientesController;

Route::get('/justificante', [JustificanteController::class, 'index'])->name('justificante');

Route::get('/reporte-ausentismo', [ReporteAusentismoController::class, 'index'])->name('ausentismo');

Route::get('/fichamedica', [FichaMedicaController::class, 'index'])->name('ficha_medica');

Route::get('/canalizaciones', [CanalizacionesController::class, 'index'])->name('canalizaciones');

Route::get('/expedientes', [ExpedientesController::class, 'index'])->name('expedientes');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/justificantes', function () {
    return view('justificantes');
})->name('justificantes');

Route::get('/reporte_ausentismo', function () {
    return view('reporte_ausentismo');
})->name('reporte_ausentismo');

Route::get('/fichamedica', function () {
    return view('fichamedica');
})->name('fichamedica');

Route::get('/canalizaciones', function () {
    return view('canalizaciones');
})->name('canalizaciones');

Route::get('/expedientes', function () {
    return view('expedientes');
})->name('expedientes');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
