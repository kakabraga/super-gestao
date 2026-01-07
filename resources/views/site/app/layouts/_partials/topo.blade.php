<header class="w-full bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex h-16 items-center justify-between">
            
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <a href="{{ route('app.home')}}" class="text-xl font-bold text-indigo-400 hover:text-indigo-400 transition">Home</a>
            </div>

            <!-- Menu -->
            <nav class="hidden md:flex items-center gap-10">
                <a href="{{ route('app.cliente')}}" class="hover:text-indigo-400 transition">Clientes</a>
                <a href="{{ route('app.fornecedor')}}" class="hover:text-indigo-400 transition">Fornecedores</a>
                <a href="{{ route('app.produto')}}" class="hover:text-indigo-400 transition">Produtos</a>
            </nav>

            <!-- Ações -->
            <div class="flex items-center gap-4">
                <a href="{{ route('app.logout')}}"class="rounded bg-indigo-600 px-4 py-2 text-sm font-medium hover:bg-indigo-500 transition">
                Sair
                </a>
            </div>

        </div>
    </div>
</header>
