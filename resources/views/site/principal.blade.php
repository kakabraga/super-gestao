@extends('site.layouts.basico')
@section('titulo', 'Index')
@section('conteudo')
    <div class="conteudo-destaque ">
        <div class="border-2 rounded flex ">
            {{-- Imagem (metade esquerda) --}}
            <div class="">
                <div class="flex justify-start ">
                    <div class="w-5/6 border-2 py-2 px-2 flex">
                        <h1>Sistema Super Gestão</h1>
                        <p>Software para gestão empresarial ideal para sua empresa.
                        <p>
                        <div class="chamada">
                            <img src="{{ asset('img/check.png') }}">
                            <span class="texto-branco">Gestão completa e descomplicada</span>
                        </div>
                        <div class="chamada">
                            <img src="{{ asset('img/check.png') }}">
                            <span class="texto-branco">Sua empresa na nuvem</span>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 flex justify-center items-center p-4 ">
                    <img src="{{ asset('img/player_video.jpg') }}" class="max-w-full rounded">
                </div>
            </div>
            {{-- Formulário (metade direita) --}}
            <div class="w-1/2 p-4 flex justify-end ">
                <div class="border-2 rounded p-4 bg-white shadow  border-1 border-sky-300/100 shadow-xl">
                    @component('site.layouts._components.form_contato', ['motivo_contato' => $motivo_contato])
                    @endcomponent
                </div>
            </div>

        </div>

    </div>
    </div>
@endsection