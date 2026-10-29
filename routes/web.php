<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListarProyectosController;
use App\Http\Controllers\CrearProyectoController;
use App\Http\Controllers\VerProyectoController;
use App\Http\Controllers\ActualizarProyectoController;
use App\Http\Controllers\EliminarProyectoController;

// Redirección de la raíz al listado general
Route::get('/', function () {
    return redirect('/proyectos');
});

// 1. Listar todos los proyectos
Route::get('/proyectos', ListarProyectosController::class)->name('proyectos.index');

// 2. Agregar Proyecto
Route::get('/proyectos/crear', [CrearProyectoController::class, 'create'])->name('proyectos.create');
Route::post('/proyectos', [CrearProyectoController::class, 'store'])->name('proyectos.store');

// 3. Obtener un proyecto por su id
Route::get('/proyectos/{id}', VerProyectoController::class)->name('proyectos.show');

// 4. Actualizar proyecto por su id (acepta tanto /edicion como /editar)
Route::get('/proyectos/{id}/edicion', [ActualizarProyectoController::class, 'edit'])->name('proyectos.edicion');
Route::get('/proyectos/{id}/editar', [ActualizarProyectoController::class, 'edit'])->name('proyectos.edit');
Route::put('/proyectos/{id}', [ActualizarProyectoController::class, 'update'])->name('proyectos.update');

// 5. Eliminar proyecto por su id (acepta tanto /borrar como /eliminar)
Route::get('/proyectos/{id}/borrar', [EliminarProyectoController::class, 'show'])->name('proyectos.borrar');
Route::get('/proyectos/{id}/eliminar', [EliminarProyectoController::class, 'show'])->name('proyectos.delete');
Route::delete('/proyectos/{id}', [EliminarProyectoController::class, 'destroy'])->name('proyectos.destroy');
// 6. Para los Eliminar por id
Route::post('/proyectos/buscar', [VerProyectoController::class, 'buscarPorId'])->name('proyectos.buscarPorId');
Route::post('/proyectos/eliminar-id', [EliminarProyectoController::class, 'eliminarPorId'])->name('proyectos.eliminarPorId');