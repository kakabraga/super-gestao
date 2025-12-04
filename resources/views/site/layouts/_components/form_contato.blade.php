<div class="contato-principal">

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
        <select name='motivo_contato' class={{ $classe }}>
            <option value="">Qual o motivo do contato?</option>
            <option value="1" {{ old('motivo_contato') == 1 ? 'selected' : ''}}>Dúvida</option>
            <option value="2" {{ old('motivo_contato') == 2 ? 'selected' : ''}}>Elogio</option>
            <option value="3" {{ old('motivo_contato') == 3 ? 'selected' : ''}}>Reclamação</option>
        </select>
        <br>
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

    <pre>
                    {{ print_r($errors) }}
                </pre>
</div>