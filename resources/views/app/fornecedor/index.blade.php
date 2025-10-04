<h3>fornecedor</h3>

{{-- teste --}}

@php
    $numero = 1;
@endphp
{{-- @isset($fornecedores)
@foreach ($fornecedores as $f)
<p>
    Nome do fornecedor: {{ $f['nome'] }} -- Numero do fornecedor: {{ $numero++ }} <br>
    Status do fornecedor: {{ $f['status'] == 'N' ? 'O fornecedor está inativo' : 'O fornecedor está ativo' }}
</p>
@endforeach
@endisset --}}

@forelse ($fornecedores as $indice => $fornecedor) {
    {{ $loop->iteration}}
    Fornecedor: {{$fornecedor['nome']}}
    <br>
    <hr>
    <br>

    @if ($indice == 5)
        total de iterações: {{$loop->index}}
        @break

    @endif


    {{-- @if($loop->first) {
    primeira iteração {{$loop->first}}
    }
    @endif --}}
@empty
    Não há fornecedores cadastrados.
    }
@endforelse
{{-- @if (isset($fornecedores))
@php $texto = $fornecedores[0]['status'] @endphp
@else
@php $texto = "Não existe fornecedores" @endphp
@endif --}}
<br>