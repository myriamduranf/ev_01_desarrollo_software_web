<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class EliminarProyectoController extends Controller
{
    public function show($id)
    {
        $proyecto = Proyecto::buscarporID($id);

        if (!$proyecto) {
            abort(404, 'Proyecto no encontrado');
        }

        return view('proyectos.borrar', compact('proyecto'));
    }

    public function destroy($id)
    {
        Proyecto::eliminarProyecto($id);
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente.');
    }

    public function eliminarPorId(Request $request)
    {
        $id = $request->input('id');
        $eliminado = Proyecto::eliminarProyecto($id);

        if ($eliminado) {
            return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente.');
        }

        return redirect()->route('proyectos.index')->with('error', 'Proyecto no encontrado.');
    }
}