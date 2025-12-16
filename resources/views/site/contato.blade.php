@extends('site.layouts.basico')

@section('titulo', 'Contato')
@section('conteudo')

    <div class="w-full px-4">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>
        <div class="border-2 border-solid border-sky-600 border-solid  py-2 px-3 rounded">
            @component('site.layouts._components.form_contato', ['classe' => 'borda-preta', 'motivo_contato' => $motivo_contato])
            @endcomponent
        </div>
    </div>
    @component('site.layouts._partials.rodape')
    @endcomponent
@endsection