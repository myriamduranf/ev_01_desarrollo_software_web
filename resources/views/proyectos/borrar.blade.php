<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Proyecto - TechSolutions</title>
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
            max-width: 480px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3);
            border-top: 4px solid #ef4444;
        }
        h2 {
            margin-top: 0;
            color: #f87171;
            margin-bottom: 1rem;
        }
        p {
            color: #cbd5e1;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }
        .info-box {
            background-color: #0f172a;
            border-radius: 6px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            border: 1px solid #334155;
        }
        .info-item {
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }
        .info-item strong {
            color: #94a3b8;
        }
        .btn-container {
            display: flex;
            gap: 1rem;
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
        .btn-danger {
            background-color: #ef4444;
            color: #ffffff;
        }
        .btn-secondary {
            background-color: #334155;
            color: #f8fafc;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>¿Eliminar Proyecto?</h2>
    <p>¿Estás seguro de que deseas eliminar este proyecto? Esta acción no se puede deshacer.</p>

    <div class="info-box">
        <div class="info-item"><strong>ID:</strong> #{{ $proyecto['id'] }}</div>
        <div class="info-item"><strong>Nombre:</strong> {{ $proyecto['nombre'] }}</div>
        <div class="info-item"><strong>Responsable:</strong> {{ $proyecto['responsable'] }}</div>
        <div class="info-item"><strong>Estado:</strong> {{ $proyecto['estado'] }}</div>
    </div>

    <form action="{{ route('proyectos.destroy', $proyecto['id']) }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="btn-container">
            <button type="submit" class="btn btn-danger">Sí, eliminar</button>
            <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

</body>
</html>