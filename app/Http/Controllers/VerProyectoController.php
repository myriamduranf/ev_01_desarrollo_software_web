<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class VerProyectoController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $proyecto = Proyecto::buscarporID($id);

        if (!$proyecto) {

            return 'no encontrado';
        }
        return view('proyectos.detalles', ['proyecto' => $proyecto]);
    }


}
