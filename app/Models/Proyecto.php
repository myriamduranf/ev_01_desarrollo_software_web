<?php

namespace App\Models;

class Proyecto
{
    public static function getProyectos()
    {

        if (!session()->has('proyectos')) {
            $proyectosIniciales = [
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
            session(['proyectos' => $proyectosIniciales]);
        }

        return session('proyectos');
    }

    public static function buscarporID($id)
    {
        $proyectos = self::getProyectos();
        foreach ($proyectos as $proyecto) {
            if ($proyecto['id'] == $id) {
                return $proyecto;
            }
        }
        return null;
    }

    public static function crearProyecto($datos)
    {
        $proyectos = self::getProyectos();

        $ultimoId = count($proyectos) > 0 ? max(array_column($proyectos, 'id')) : 0;

        $datos['id'] = $ultimoId + 1;
        $proyectos[] = $datos;


        session(['proyectos' => $proyectos]);
    }

    public static function actualizarProyecto($id, $datos)
    {
        $proyectos = self::getProyectos();
        foreach ($proyectos as $key => $proyecto) {
            if ($proyecto['id'] == $id) {
                $datos['id'] = $id;
                $proyectos[$key] = $datos;
                session(['proyectos' => $proyectos]);
                return true;
            }
        }
        return false;
    }

    public static function eliminarProyecto($id)
    {
        $proyectos = self::getProyectos();
        foreach ($proyectos as $key => $proyecto) {
            if ($proyecto['id'] == $id) {
                unset($proyectos[$key]);

                session(['proyectos' => array_values($proyectos)]);
                return true;
            }
        }
        return false;
    }
}