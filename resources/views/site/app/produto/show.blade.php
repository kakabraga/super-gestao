@extends('site.app.layouts.basico')
@section('titulo', 'Criação de Produtos')
@section('conteudo')


    <div class="mt-6 flex justify-center">
        <section class="w-full max-w-4xl rounded-xl border border-violet-200 bg-white shadow-lg p-6">

            <!-- Título -->
            <header class="bg-violet-500 rounded-lg p-4 shadow-sm text-center">
                <h1 class="text-white text-xl font-semibold">
                    Visualizar Produto
                </h1>
            </header>

            @component('site.app.layouts._partials.menu_form_produto')
            @endcomponent
            <!-- Conteúdo -->
            <main class="mt-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">
                                    ID
                                </th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">
                                    NOME
                                </th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">
                                    DESCRIÇÃO
                                </th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">
                                    PESO
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 text-sm text-gray-800 border-b">
                                    {{ $produto->id }}
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-800 border-b">
                                    {{ $produto->nome }}
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-800 border-b">
                                    {{ $produto->descricao }}
                                </td>
                                <td class="px-4 py-2 text-sm text-gray-800 border-b">
                                    {{ $produto->peso }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

        </section>
    </div>

@endsection