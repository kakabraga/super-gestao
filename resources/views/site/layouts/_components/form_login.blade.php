<div class="border border-sky-600 rounded-lg mt-4 p-6 bg-white shadow-lg">

    <h2 class="text-lg font-semibold text-sky-900 mb-4">
        Formulário de Registro
    </h2>

    <form action="{{ route("site.login") }}" class="space-y-5" method="post">
        @csrf
        <!-- Campos -->
        <div class="grid grid-cols-1 md:grid-cols-1 gap-3">

            <div>
                <label class="block text-sm font-medium text-sky-800 mb-1">
                    Usuário
                </label>
                <input type="text" placeholder="Digite seu usuário" value="{{ old('name') }}" class="w-full rounded-md border border-sky-600 px-4 py-2
                           text-sm text-sky-900
                           focus:border-sky-500 focus:ring-2 focus:ring-sky-500/30
                           outline-none transition" name="name" id="name" />
                 @error('name')
                                <span class="text-sm font-medium mt-2 mb-4 focus:outline-blue-400">{{
                    $message  }}</span>
                                <br>
                @enderror
            </div>
            
            <div>
                <label class="block text-sm font-medium text-sky-800 mb-1">
                    Email
                </label>
                <input type="email" placeholder="Digite sua password" value="{{ old('email')}}" class="w-full rounded-md border border-sky-600 px-3 py-2
                           text-sm text-sky-900
                           focus:border-sky-500 focus:ring-2 focus:ring-sky-500/30
                           outline-none transition" name="email" id="email" />
                @error('email')
                                <span class="text-smblock text-sm font-medium text-red-800 mb-1font-medium  py-2 px-3 rounded mt-2 mb-4 focus:outline-blue-400">{{
                    $message  }}</span>
                                <br>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-sky-800 mb-1">
                    Senha
                </label>
                <input type="password" placeholder="Digite sua password" value="{{ old('password')}}" class="w-full rounded-md border border-sky-600 px-3 py-2
                           text-sm text-sky-900
                           focus:border-sky-500 focus:ring-2 focus:ring-sky-500/30
                           outline-none transition" name="password" id="password" />
                @error('password')
                                <span class="text-smblock text-sm font-medium text-red-800 mb-1font-medium  py-2 px-3 rounded mt-2 mb-4 focus:outline-blue-400">{{
                    $message  }}</span>
                                <br>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-sky-800 mb-1">
                    Confirmação de Senha
                </label>
                <input type="password_confirmed" placeholder="Confirme sua senha" value="{{ old('password_confirmed')}}" class="w-full rounded-md border border-sky-600 px-3 py-2
                           text-sm text-sky-900
                           focus:border-sky-500 focus:ring-2 focus:ring-sky-500/30
                           outline-none transition" name="password_confirmed" id="password_confirmed" />
                @error('password_confirmed')
                                <span class="text-smblock text-sm font-medium text-red-800 mb-1font-medium  py-2 px-3 rounded mt-2 mb-4 focus:outline-blue-400">{{
                    $message  }}</span>
                                <br>
                @enderror
            </div>

        </div>

        <!-- Botão -->
        <div class="flex justify-end">
            <button type="submit" class="bg-sky-600 text-white text-sm font-medium
                       px-6 py-2 rounded-md
                       hover:bg-sky-700
                       focus:outline-none focus:ring-2 focus:ring-violet-500/40
                       active:bg-sky-800 transition">
                Entrar
            </button>
        </div>
        <div class="flex justify-end">
            <span class="text-sm font-semibold text-sky-900 mb-4">
                Já possuiu uma conta? clique <a class="text-indigo-900" href="#">aqui</a>
            </span>
        </div>

    </form>
</div>