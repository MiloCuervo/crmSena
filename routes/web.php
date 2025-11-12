<?php

use App\Http\Controllers\CasosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('logIn');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/Casos', CasosController::class, 'index');