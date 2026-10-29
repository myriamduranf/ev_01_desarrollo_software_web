<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-800 text-white">
    <header class="p-4 bg-slate-900 flex justify-between items-center text-white">
        <h1 class="text-2xl font-bold">TechSolutions</h1>

        <!-- Formularios centrados en el header -->
        <div class="flex gap-4">
            <!-- Buscar por ID -->
            <form action="{{ route('proyectos.buscarPorId') }}" method="POST" class="flex items-center">
                @csrf
                <input type="number" name="id" placeholder="Buscar ID..." required
                    class="bg-slate-700 border-none rounded-l-md px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 w-32 text-white placeholder-slate-400">
                <button type="submit" class="bg-blue-600 px-3 py-1.5 rounded-r-md text-sm hover:bg-blue-700 transition">
                    Buscar
                </button>
            </form>

            <!-- Eliminar por ID -->
            <form action="{{ route('proyectos.eliminarPorId') }}" method="POST" class="flex items-center">
                @csrf
                <input type="number" name="id" placeholder="Eliminar ID..." required
                    class="bg-slate-700 border-none rounded-l-md px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 w-32 text-white placeholder-slate-400">
                <button type="submit" class="bg-red-600 px-3 py-1.5 rounded-r-md text-sm hover:bg-red-700 transition">
                    Eliminar
                </button>
            </form>
        </div>

        <x-valor-uf />
    </header>

    <main class="p-6 overflow-x-auto">
        <!-- Mostrar mensajes de éxito o error globales -->
        @if(session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-500 text-white p-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        @yield('contenido')
    </main>

</body>

</html>