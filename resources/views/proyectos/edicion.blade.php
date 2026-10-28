<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto - TechSolutions</title>
    <style>
        body {
            background-color: #0f172a;
            color: #f8fafc;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            margin: 0;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }
        .card {
            background-color: #1e293b;
            padding: 2rem;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3);
        }
        h2 {
            margin-top: 0;
            color: #38bdf8;
            margin-bottom: 1.5rem;
        }
        .form-group {
            margin-bottom: 1.2rem;
        }
        label {
            display: block;
            margin-bottom: 0.4rem;
            font-size: 0.9rem;
            color: #94a3b8;
        }
        input, select {
            width: 100%;
            padding: 0.6rem;
            border-radius: 4px;
            border: 1px solid #334155;
            background-color: #0f172a;
            color: #f8fafc;
            box-sizing: border-box;
            font-size: 0.95rem;
        }
        /* Garantiza que las opciones desplegables sean visibles */
        select option {
            background-color: #1e293b;
            color: #f8fafc;
        }
        input:focus, select:focus {
            outline: none;
            border-color: #38bdf8;
        }
        .btn-container {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        .btn {
            padding: 0.6rem 1.2rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            cursor: pointer;
            border: none;
            font-size: 0.95rem;
        }
        .btn-primary {
            background-color: #38bdf8;
            color: #0f172a;
        }
        .btn-secondary {
            background-color: #334155;
            color: #f8fafc;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Editar Proyecto</h2>

    <form action="{{ route('proyectos.update', $proyecto['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre Proyecto</label>
            <input type="text" id="nombre" name="nombre" value="{{ $proyecto['nombre'] }}" required>
        </div>

        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ $proyecto['fecha_inicio'] }}" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select id="estado" name="estado" required>
                <option value="Planificación" {{ trim($proyecto['estado']) == 'Planificación' ? 'selected' : '' }}>Planificación</option>
                <option value="En progreso" {{ trim($proyecto['estado']) == 'En progreso' ? 'selected' : '' }}>En progreso</option>
                <option value="Completado" {{ trim($proyecto['estado']) == 'Completado' ? 'selected' : '' }}>Completado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="responsable">Responsable</label>
            <input type="text" id="responsable" name="responsable" value="{{ $proyecto['responsable'] }}" required>
        </div>

        <div class="form-group">
            <label for="monto">Monto</label>
            <input type="number" id="monto" name="monto" value="{{ $proyecto['monto'] }}" required>
        </div>

        <div class="btn-container">
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

</body>
</html>