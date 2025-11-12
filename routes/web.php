<?php

use App\Http\Controllers\CasosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('logIn');
});

Route::get('/perfil', function () {
    return view('perfil');
});



//Rutas sobre Los Casos {Index, Mostrar,crear, editar, eliminar}
Route::get('/Casos', [CasosController::class, '__invoke']);
Route::get('/Casos/{caso_id}', [CasosController::class, 'Mostrar']);
Route::get('/CrearCaso', [CasosController::class, 'Crear']);