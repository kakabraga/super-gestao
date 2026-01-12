<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Super Gestão - @yield('titulo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="min-h-screen flex flex-col">




    {{-- Topo --}}
    @include($menu ?? 'site.app.layouts._partials.topo')

    {{-- Conteúdo --}}
    <main class="flex-1">
        @component('site.app.layouts._partials.mensagens')
        
        @endcomponent
        @yield('conteudo')
    </main>

    {{-- Rodapé --}}
    @include('site.app.layouts._partials.rodape')

</body>

</html>