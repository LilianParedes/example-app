<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function mostrarVista()
    {
        return view('mis-views.primer-view'); // Retorna la vista que extiende el layout
    }
}
