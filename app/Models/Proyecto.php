<?php

namespace App\Models;


class Proyecto
{


    public static function getProyectos()
    {


        return [
            [
                'id' => 1,
                'nombre' => 'Actualización Servidores',
                'fecha_inicio' => '2026-10-21',
                'estado' => 'En progreso',
                'responsable' => 'Admin',
                'monto' => 1500000
            ],
            [
                'id' => 2,
                'nombre' => 'Migración a la Nube',
                'fecha_inicio' => '2026-11-05',
                'estado' => 'Planificación',
                'responsable' => 'Soporte',
                'monto' => 3200000
            ],
            [
                'id' => 3,
                'nombre' => 'Implementación AWS',
                'fecha_inicio' => '2026-11-15',
                'estado' => 'En progreso',
                'responsable' => 'Laura Gómez',
                'monto' => 4500000
            ],
            [
                'id' => 4,
                'nombre' => 'Desarrollo App Móvil',
                'fecha_inicio' => '2026-12-10',
                'estado' => 'Planificación',
                'responsable' => 'Carlos Ruiz',
                'monto' => 2800000
            ],
            [
                'id' => 5,
                'nombre' => 'Auditoría de Seguridad',
                'fecha_inicio' => '2026-08-05',
                'estado' => 'Completado',
                'responsable' => 'Ana Silva',
                'monto' => 1800000
            ]



        ];




    }

    public static function buscarporID($id)
    {

        $proyectos = self::getProyectos();
        foreach ($proyectos as $proyecto) {

            if ($proyecto['id'] == $id) {

                return $proyecto;


            }

            # code...
        }

        return null;

    }
}