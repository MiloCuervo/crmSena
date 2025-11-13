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
Route::get('/casos', [CasosController::class, '__invoke']);
Route::get('/casos/{caso_id}', [CasosController::class, 'Mostrar']);
Route::get('/crearCaso', [CasosController::class, 'Crear']);
Route::post('/casos', [CasosController::class, '']);