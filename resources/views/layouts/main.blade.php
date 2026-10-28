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


        <x-valor-uf />
    </header>

    <main class="p-6 overflow-x-auto">
        @yield('contenido')


    </main>



</body>

</html>