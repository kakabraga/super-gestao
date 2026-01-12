@if (session('message'))
    <x-layout::alert type="success">
        {{ session('message') }}
    </x-layout::alert>
@endif
@if (session('error'))
    <x-layout::alert type="error">
        {{ session('error') }}
    </x-layout::alert>
@endif
@if (session('warning'))
<x-layout::alert type="warning">
    Atenção! Verifique os dados.
</x-layout::alert>
@endif
@if (session('warning'))
<x-layout::alert type="info" timeout="6000">
    Informação importante para o usuário.
</x-layout::alert>
@endif