<div class="w-full px-4">

    <form action="{{ route('site.contato') }}" method="post">
        @csrf
        <input type="text" value="{{ old('nome') }}" placeholder="Nome" class={{ $classe }} name='nome' id='nome'>
        <br>
        <input type="text" value="{{ old('sobrenome') }}" placeholder="Sobrenome" class={{ $classe }} name='sobrenome'
            id='sobrenome'>
        <br>
        <input type="text" value="{{ old('telefone') }}" placeholder="Telefone" class={{ $classe }} name='telefone'
            id='telefone'>
        <br>
        <input type="text" value="{{ old('email') }}" placeholder="E-mail" class={{ $classe }} name='email' id='email'>
        <br>
        <select name="motivo_contato" class="{{ $classe }}">
            <option value="">Qual o motivo do contato?</option>

            @foreach ($motivo_contato as $motivo)
                <option value="{{ $motivo->id }}" {{ old('motivo_contato') == $motivo->motivo_contato ? 'selected' : '' }}>
                    {{ $motivo->motivo_contato }}
                </option>
            @endforeach
        </select>
        <textarea name='mensagem' class={{ $classe }}>
           @if(old('mensagem') != '')
            {{ old('mensagem') }}
        @endif
           Preencha aqui a sua mensagem
        </textarea>
        <br>
        <button type="submit" class={{ $classe }}>ENVIAR</button>
    </form>
</div>


<div style="position: absolut; top:0px; left:0px; width: 50%; background-color: red;">
</div>