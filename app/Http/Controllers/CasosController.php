<?php

namespace App\Http\Controllers;

use App\Models\Casos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CasosController
{
    public function __invoke()
    {
       $casos = Casos::all();
       return view('casos.index',compact('casos'));
    }

    public function create()
    {
        //
    }
}
