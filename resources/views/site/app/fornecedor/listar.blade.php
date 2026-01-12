@extends('site.app.layouts.basico')
@section('titulo', 'Fornecedores')
@section('conteudo')

<div class="mt-6 flex justify-center">
    <section class="w-full max-w-4xl rounded-xl border border-violet-200 bg-white shadow-lg p-6">

        <!-- Título -->
        <header class="bg-violet-500 rounded-lg p-4 shadow-sm text-center mb-6">
            <h1 class="text-white text-xl font-semibold">
                Listar Fornecedores
            </h1>
        </header>

        <!-- Menu -->
        @component('site.app.layouts._partials.menu_form_fornecedor', ['buttonText' => 'Salvar'])
        @endcomponent

        <!-- Conteúdo -->
        <div class="overflow-x-auto mt-6">
            <table class="min-w-full border border-gray-300 rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">Nome</th>
                        <th class="px-4 py-2 text-left">Site</th>
                        <th class="px-4 py-2 text-left">UF</th>
                        <th class="px-4 py-2 text-center">Editar</th>
                        <th class="px-4 py-2 text-center">Excluir</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($fornecedores ?? [] as $fornecedor)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $fornecedor->nome }}</td>
                            <td class="px-4 py-2">{{ $fornecedor->site }}</td>
                            <td class="px-4 py-2">{{ $fornecedor->uf }}</td>

                            <td class="px-4 py-2 text-center">
                                <a href=""
                                   class="text-blue-600 hover:underline">
                                    Editar
                                </a>
                            </td>

                            <td class="px-4 py-2 text-center">
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-red-600 hover:underline"
                                            onclick="return confirm('Tem certeza que deseja excluir?')">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-4 text-center text-gray-500">
                                Nenhum fornecedor encontrado.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </section>
</div>

@endsection
