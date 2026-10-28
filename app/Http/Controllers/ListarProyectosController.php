<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request; // captura la informacion desde la web

class ListarProyectosController extends Controller
{

    public function __invoke(Request $request)
    {

        //se solicitan los datos al modelo
        $proyectos = Proyecto::getProyectos();

        return view('proyectos.index', ['proyectos' => $proyectos]);




    }






}