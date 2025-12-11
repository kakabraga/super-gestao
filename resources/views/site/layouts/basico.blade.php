<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - @yield('titulo')</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full px-6">
        @yield('conteudo')
        <button class="bg-blue-500 text-white px-2 py-1 rounded ">
            TEEEESTE
        </button>

    </div>

</body>

</html>