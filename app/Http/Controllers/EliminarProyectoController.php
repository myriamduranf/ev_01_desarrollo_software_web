<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;

class EliminarProyectoController extends Controller
{
    /**
     * Muestra la vista de confirmación para eliminar un proyecto.
     */
    public function show($id)
    {
        $proyecto = Proyecto::buscarporID($id);

        if (!$proyecto) {
            abort(404, 'Proyecto no encontrado');
        }

        return view('proyectos.borrar', compact('proyecto'));
    }

    /**
     * Simula la eliminación del proyecto.
     */
    public function destroy($id)
    {
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente.');
    }
}