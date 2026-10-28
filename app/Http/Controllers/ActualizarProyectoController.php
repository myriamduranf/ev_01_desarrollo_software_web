<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ActualizarProyectoController extends Controller
{
    /**
     * Muestra la vista para editar un proyecto existente.
     */
    public function edit($id)
    {
        $proyecto = Proyecto::buscarporID($id);

        if (!$proyecto) {
            abort(404, 'Proyecto no encontrado');
        }

        return view('proyectos.edicion', compact('proyecto'));
    }

    /**
     * Simula la actualización del proyecto.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'estado' => 'required|string',
            'responsable' => 'required|string|max:255',
            'monto' => 'required|numeric',
        ]);

        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado exitosamente.');
    }
}