<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - @yield('titulo')</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('site.layouts._partials.topo')
    <div class="w-full px-4">
        @yield('conteudo')
    </div>

</body>

</html>