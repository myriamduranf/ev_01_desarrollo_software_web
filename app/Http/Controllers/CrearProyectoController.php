<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrearProyectoController extends Controller
{
    /**
     * Muestra la vista con el formulario para crear un proyecto.
     */
    public function create()
    {
        return view('proyectos.crear');
    }

    /**
     * Valida y procesa la creación del proyecto.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'       => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'estado'       => 'required|string',
            'responsable'  => 'required|string|max:255',
            'monto'        => 'required|numeric',
        ]);

        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente.');
    }
}