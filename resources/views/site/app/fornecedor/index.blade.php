@extends('site.app.layouts.basico')
@section('titulo', 'Fornecedores')
@section('conteudo')

    <div class="mt-6 flex justify-center">
        <section class="w-full max-w-4xl rounded-xl border border-violet-200 bg-white shadow-lg p-6">

            <!-- Título -->
            <header class="bg-violet-500 rounded-lg p-4 shadow-sm text-center">
                <h1 class="text-white text-xl font-semibold">
                    Fornecedor
                </h1>
            </header>

            <!-- Menu -->
 
                    @component('site.app.layouts._partials.menu_form_fornecedor')                    
                    @endcomponent

            <!-- Conteúdo -->
             <main class="mt-6">
                <div class="bg-gray-50 rounded-lg p-6 shadow-inner max-w-3xl">
                    @component('site.app.layouts._components.form_pesquisa',['buttonText' => 'Procurar'])                    
                    @endcomponent
                </div>

        </section>
    </div>

@endsection