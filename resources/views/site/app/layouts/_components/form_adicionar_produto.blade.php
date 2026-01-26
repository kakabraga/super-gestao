<form action="{{ route('produto.store') }}" method="post" class="space-y-5">
    <input type="hidden" id="id_produto" name="id_produto" value="{{ $produto->id ?? "0" }}">
    @csrf
    <div>
        <label class="block text-sm font-medium text-gray-700">
            Nome
        </label>
        <input type="text" value="{{old('nome', $produto->nome ?? '') }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm py-2 px-2
                                           focus:border-violet-500 focus:ring-violet-500" name="nome" id="nome"
            placeholder="Digite o nome do produto">
    </div>
    @error('nome')
        <span class="block text-sm text-red-700 mt-2">
            {{ $message }}
        </span>
    @enderror
    <div>
        <label class="block text-sm font-medium text-gray-700">
            Descricao
        </label>
        <input type="text" value="{{ old('descricao', $produto->descricao ?? '') }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm py-2 px-2
                                           focus:border-violet-500 focus:ring-violet-500" name="descricao"
            id="descricao" placeholder="Digite o descricao do produto">
    </div>
    @error('descricao')
        <span class="block text-sm text-red-700 mt-2">
            {{ $message }}
        </span>
    @enderror
    <div>
        <label class="block text-sm font-medium text-gray-700">
            Peso
        </label>
        <input type="text" value="{{ old('peso', $produto->peso ?? '')}}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm py-2 px-2
                                           focus:border-violet-500 focus:ring-violet-500" name="peso" id="peso"
            placeholder="Digite o peso do produto">
    </div>
    @error('peso')
        <span class="block text-sm text-red-700 mt-2">
            {{ $message }}
        </span>
    @enderror
    <div>
        <label class="block text-sm font-medium text-gray-700">
            Unidade ID
        </label>

        <select name="unidade_id" id="unidade_id" 
        class="mt-1 w-full rounded-md border-gray-300 
        shadow-sm py-2 px-2 
        focus:border-violet-500 
        focus:ring-violet-500">
            <option value="">Qual o motivo do contato?</option>
            @foreach ($unidades as $unidade)
                <option value="{{ $unidade->id }}">{{ $unidade->unidade }}</option>
            @endforeach
        </select>
    </div>
    @error('unidade')
        <span class="block text-sm text-red-700 mt-2">
            {{ $message }}
        </span>
    @enderror
    <div class="flex justify-end">
        <button type="submit" class="px-6 py-2 rounded-md bg-violet-600 text-white
                                           hover:bg-violet-700 transition">
            {{ $buttonText }}
        </button>
    </div>
</form>
</div>
</main>