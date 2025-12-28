<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input type="text" value="{{ old('nome') }}" placeholder="Nome"
        class="border-2 border-gray-700 border-solid focus:border-cyan-600 py-2 px-3 rounded mt-2 border-2" name='nome'
        id='nome'>
    <br>
    @error('nome')
    <span class="text-sm font-medium shadow-xl py-2 px-3 rounded mt-2 mb-4 focus:outline-blue-400">{{
    $message  }}</span>
    <br>
    @enderror
    <input type="text" value="{{ old('sobrenome') }}" placeholder="Sobrenome"
        class="border-2 border-gray-700 shadow-xl py-2 px-3 rounded mt-2 focus:outline-blue-400" name='sobrenome'
        id='sobrenome'>
    <br>
    <input type="text" value="{{ old('telefone') }}" placeholder="Telefone"
        class="shadow-xl py-2 px-3 rounded mt-2 focus:outline-blue-400" name='telefone' id='telefone'>
    <br>
    <input type="text" value="{{ old('email') }}" placeholder="E-mail"
        class="shadow-xl py-2 px-3 rounded mt-2 focus:outline-blue-400" name='email' id='email'>
    <br>
    <select name="motivo_contatos_id" class="shadow-xl py-2 px-3 rounded mt-2 focus:outline-blue-400">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contato as $motivo)
            <option value="{{ $motivo->id }}" {{ old('motivo_contato_id') == $motivo->motivo_contato ? 'selected' : '' }}>
                {{ $motivo->motivo_contato }}
            </option>
        @endforeach
    </select>
    <br>
    <textarea name='mensagem' class="shadow-xl py-2 px-3 mt-2 caret-blue-500">
           @if(old('mensagem') != '')
            {{ old('mensagem') }}
        @endif
           Preencha aqui a sua mensagem
        </textarea>
    <br>
    <button type="submit" class="bg-sky-500 px-3 text-white rounded transition duration-150">ENVIAR</button>

    {{-- @if($errors->any()) {
    @component('site.layouts._components.mensagem_erro')
    @endcomponent
    }
    @endif --}}
</form>