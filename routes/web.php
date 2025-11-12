<?php


use App\Models\base;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('logIn');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('pruebas', function () {
    $prueba = new base;

    $prueba->nombre = 'Juan';   
    $prueba->contrasena = '12345';
    $prueba->email = 'camilo2@gmail.com';
    $prueba->save();

    return $prueba;
    
});