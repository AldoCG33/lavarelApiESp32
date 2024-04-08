<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\huella;

Route::get('/formulario', [huella::class, 'mostrarVista']);

// Ruta para manejar la solicitud POST del formulario
Route::post('/guardar', [huella ::class, 'guardar'])->name('guardar');

// jalar los datos una vez validada la huella 
Route::get('/verificarEstadoSalon/{idHuella}', [huella::class, 'verificarEstadoSalon'])->name('verificarEstadoSalon');

//vista del resultado
Route::get('/verificar', [huella::class, 'mostrarVistaS']);