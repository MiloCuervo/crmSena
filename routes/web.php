<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('logIn');
});

Route::get('/perfil', function () {
    return view('perfil');
});