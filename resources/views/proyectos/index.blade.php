@extends ('layouts.main')
@section('contenido')
    <div class="bg-slate-800 overflow-x-auto p-4 rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-100">TechSolutions</h1>
            <a href="{{ route('proyectos.create') }}"
                class="bg-sky-500 hover:bg-sky-600 text-slate-900 font-semibold px-4 py-2 rounded shadow transition duration-200">
                + Nuevo Proyecto
            </a>
        </div>

        {{-- Banner de retroalimentación para acciones de crear, editar o eliminar --}}
        @if (session('success'))
            <div class="mb-4 p-3 bg-emerald-900 border border-emerald-500 text-emerald-200 rounded text-sm flex items-center justify-between">
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <table class="min-w-full text-sm text-left">
            <thead class="bg-slate-700 text-gray-100">
                <tr>
                    <th class="px-4 py-3 font-bold border-r"> ID Proyecto </th>
                    <th class="px-4 py-3 font-bold border-r">
                        Nombre Proyecto
                    </th>
                    <th class="px-4 py-3 font-bold border-r">
                        Fecha de Inicio
                    </th>
                    <th class="px-4 py-3 font-bold border-r text-center">
                        Estado
                    </th>
                    <th class="px-4 py-3 font-bold text-center border-r">
                        Responsable
                    </th>
                    <th class="px-4 py-3 font-bold text-center border-r">
                        Monto
                    </th>
                    <th class="px-4 py-3 font-bold text-center border-r">
                        Edicion
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700 text-gray-200">
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td class="px-4 py-3">{{ $proyecto['id'] }}</td>
                        <td class="px-4 py-3 text-center">{{ $proyecto['nombre'] }}</td>
                        <td class="px-4 py-3 text-center">{{ $proyecto['fecha_inicio'] }}</td>
                        <td class="px-4 py-3 text-center">{{ $proyecto['estado'] }}</td>
                        <td class="px-4 py-3 text-center">{{ $proyecto['responsable'] }}</td>
                        <td class="px-4 py-3 text-center">{{ $proyecto['monto'] }}</td>
                        <td class="px-4 py-3 text-center space-x-1">
                            <a href="/proyectos/{{ $proyecto['id'] }}/edicion"
                                class="text-orange-300 hover:text-orange-400 font-bold px-2 py-1 rounded hover:bg-slate-700 transition">
                                Editar
                            </a>

                            <a href="/proyectos/{{ $proyecto['id'] }}"
                                class="text-blue-400 hover:text-blue-300 font-bold px-2 py-1 rounded hover:bg-slate-700 transition">
                                Ver
                            </a>
                            <a href="/proyectos/{{ $proyecto['id'] }}/borrar"
                                class="text-red-400 hover:text-red-300 font-bold px-2 py-1 rounded hover:bg-slate-700 transition">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection