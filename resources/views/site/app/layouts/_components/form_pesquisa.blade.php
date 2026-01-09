
                    <form action="{{ route('app.fornecedor.listar') }}" method="post" class="space-y-5">
                        @csrf

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Nome
                            </label>
                            <input type="text" value="{{ old('nome') }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm py-2 px-2
                                           focus:border-violet-500 focus:ring-violet-500" name="nome" id="nome"
                                placeholder="Digite o nome do fornecedor">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Site
                            </label>
                            <input type="text" value="{{ old('site') }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm py-2 px-2
                                           focus:border-violet-500 focus:ring-violet-500" name="site" id="site"
                                placeholder="Digite o Site do fornecedor">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Email
                            </label>
                            <input type="text" value="{{ old('email') }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm py-2 px-2
                                           focus:border-violet-500 focus:ring-violet-500" name="email" id="email"
                                placeholder="Digite o Email do fornecedor">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                UF
                            </label>
                            <input type="text" value="{{ old('uf') }}"class="mt-1 w-full rounded-md border-gray-300 shadow-sm py-2 px-2
                                           focus:border-violet-500 focus:ring-violet-500" name="uf" id="uf"
                                placeholder="Digite o UF do fornecedor">
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="px-6 py-2 rounded-md bg-violet-600 text-white
                                           hover:bg-violet-700 transition">
                                  {{ $buttonText }}
                            </button>
                        </div>
                    </form>
                </div>
            </main>