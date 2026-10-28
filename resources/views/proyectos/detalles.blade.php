@extends ('layouts.main')
@section('contenido')
    <div class="bg-slate-800 overflow-x-auto">
        <h1> DETALLES DEL PROYECTO</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <p class="text-slate-400 text-sm font-semibold">ID del Proyecto</p>
                <p class="text-lg">{{ $proyecto['id'] }}</p>
            </div>

            <div>
                <p class="text-slate-400 text-sm font-semibold">Responsable</p>
                <p class="text-lg">{{ $proyecto['responsable'] }}</p>
            </div>

            <div>
                <p class="text-slate-400 text-sm font-semibold">Fecha de Inicio</p>
                <p class="text-lg">{{ $proyecto['fecha_inicio'] }}</p>
            </div>

            <div>
                <p class="text-slate-400 text-sm font-semibold">Estado</p>
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-2.5 py-0.5 rounded">
                    {{ $proyecto['estado'] }}
                </span>
            </div>

            <div>
                <p class="text-slate-400 text-sm font-semibold">Monto Asignado</p>

                <p class="text-lg font-bold text-emerald-400">
                    ${{ number_format($proyecto['monto'], 0, ',', '.') }}
                </p>
            </div>
        </div>
    </div>
@endsection