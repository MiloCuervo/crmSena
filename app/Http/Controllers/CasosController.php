<?php

namespace App\Http\Controllers;

use App\Models\Casos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CasosController extends Controller
{
    public function __invoke()
    {
        $casos = Casos::all();
        return view('casos.index', compact('casos'));
    }

    public function create()
    {
        //
    }

    public function Mostrar($caso_id)
    {
        $casos = Casos::find($caso_id);

        return view('Casos.crear', compact('casos'));
    }
}
