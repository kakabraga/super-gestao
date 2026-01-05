<div class="border border-sky-600 rounded-xl mt-6 p-8 bg-white shadow-md w-full max-w-md">
@php
    $auth = request()->query('auth', 'login');
@endphp
@if($auth == 'login')
    <h2 class="text-xl font-semibold text-sky-900 mb-6 text-center">
        Faça login na sua conta
    </h2>
@endif
@if($auth == 'register')
    <h2 class="text-xl font-semibold text-sky-900 mb-6 text-center">
        Faça cadastro!
    </h2>
@endif
    <form action="{{ $auth === 'login' ? route('site.login.submit') : route('site.register.submit') }}" method="post" class="space-y-5">
        @csrf

         @if($auth == 'register')<div>
            <label for="nome" class="block text-sm font-medium text-sky-800 mb-2">
                Nome
            </label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Digite seu nome"
                class="w-full rounded-md border border-sky-600 px-3 py-2
                       text-sm text-sky-900
                       focus:border-sky-500 focus:ring-2 focus:ring-sky-500/30
                       outline-none transition"
                required
            />

            @error('name')
                <span class="block text-sm text-red-700 mt-2">
                    {{ $message }}
                </span>
            @enderror
        </div>
        @endif
        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-sky-800 mb-2">
                Email
            </label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Digite seu email"
                class="w-full rounded-md border border-sky-600 px-3 py-2
                       text-sm text-sky-900
                       focus:border-sky-500 focus:ring-2 focus:ring-sky-500/30
                       outline-none transition"
                required
            />

            @error('email')
                <span class="block text-sm text-red-700 mt-2">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <!-- Senha -->
        <div>
            <label for="password" class="block text-sm font-medium text-sky-800 mb-2">
                Senha
            </label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Digite sua senha"
                class="w-full rounded-md border border-sky-600 px-3 py-2
                       text-sm text-sky-900
                       focus:border-sky-500 focus:ring-2 focus:ring-sky-500/30
                       outline-none transition"
                required
            />

            @error('password')
                <span class="block text-sm text-red-700 mt-2">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <!-- Confirmação de Senha -->
          @if($auth == 'register')
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-sky-800 mb-2">
                Confirme sua senha
            </label>
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="Digite sua senha"
                class="w-full rounded-md border border-sky-600 px-3 py-2
                       text-sm text-sky-900
                       focus:border-sky-500 focus:ring-2 focus:ring-sky-500/30
                       outline-none transition"
                required
            />

            @error('password_confirmation')
                <span class="block text-sm text-red-700 mt-2">
                    {{ $message }}
                </span>
            @enderror
        </div>
        @endif
        <!-- Botão -->
        <div class="flex justify-end pt-2">
            <button
                type="submit"
                class="bg-sky-600 text-white text-sm font-medium
                       px-6 py-2 rounded-md
                       hover:bg-sky-700
                       focus:outline-none focus:ring-2 focus:ring-sky-500/40
                       active:bg-sky-800 transition">
                Entrar
            </button>
        </div>

        <!-- Card de cadastro -->
        @if($auth == 'login')
        <div class="border-t pt-4 mt-4 text-center">
            <span class="text-sm font-medium text-sky-900">
                Não possui uma conta?
                <a href="{{ route('site.login.submit', ['auth' => 'register']) }}" class="text-indigo-900 hover:underline ml-1">
                    Clique aqui
                </a>
            </span>
        </div>
        @endif
        @if($auth == 'register')
        <div class="border-t pt-4 mt-4 text-center">
            <span class="text-sm font-medium text-sky-900">
                Já possui uma conta?
                <a href="{{ route('site.login.submit', ['auth' => 'login']) }}" class="text-indigo-900 hover:underline ml-1">
                    Clique aqui
                </a>
            </span>
        </div>
        @endif
    </form>
</div>
