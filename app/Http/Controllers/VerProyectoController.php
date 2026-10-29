<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class VerProyectoController extends Controller
{
    /**
     * Maneja la búsqueda cuando el usuario hace clic en "Ver" (por URL)
     */
    public function __invoke($id)
    {
        $proyecto = Proyecto::buscarporID($id);

        if (!$proyecto) {
            // Mejoramos el error para que regrese a la tabla con el mensaje de Tailwind
            return redirect()->route('proyectos.index')->with('error', 'Proyecto no encontrado.');
        }

        return view('proyectos.detalles', compact('proyecto'));
    }

    /**
     * Maneja la búsqueda desde el formulario de la barra superior (por POST)
     */
    public function buscarPorId(Request $request)
    {
        $id = $request->input('id');
        $proyecto = Proyecto::buscarporID($id);

        if ($proyecto) {
            return view('proyectos.detalles', compact('proyecto'));
        }

        return redirect()->route('proyectos.index')->with('error', 'Proyecto no encontrado.');
    }
}