<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
    public function mostrarTexto($texto)
    {
        return view('mis-views.primer-view', ['texto' => $texto]);
    }
}
