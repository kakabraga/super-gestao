<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Super Gestão - @yield('titulo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col">

    {{-- Topo --}}
    @include('site.layouts._partials.topo')

    {{-- Conteúdo --}}
    <main class="flex-1">
        @yield('conteudo')
    </main>

    {{-- Rodapé --}}
    @include('site.layouts._partials.rodape')

</body>
</html>
