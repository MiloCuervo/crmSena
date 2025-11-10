<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('logIn');
});

Route::get('/calendario', function () {
    return view('Calendario');
});
 