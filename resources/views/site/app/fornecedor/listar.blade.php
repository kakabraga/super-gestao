@extends('site.app.layouts.basico')
@section('titulo', 'Fornecedores')
@section('conteudo')

    @if(session('message'))
        <div class="bg-green-100 text-green-700 p-3 rounded">
            Resultado: {{ session('message') }}
        </div>
    @endif
    <div class="mt-6 flex justify-center">
        <section class="w-full max-w-4xl rounded-xl border border-violet-200 bg-white shadow-lg p-6">

            <!-- Título -->
            <header class="bg-violet-500 rounded-lg p-4 shadow-sm text-center">
                <h1 class="text-white text-xl font-semibold">
                    Listar
                </h1>
            </header>

            <!-- Menu -->
               @component('site.app.layouts._partials.menu_form_fornecedor', ['buttonText' => 'Salvar'])                    
                    @endcomponent

            <!-- Conteúdo -->


        </section>
    </div>

@endsection