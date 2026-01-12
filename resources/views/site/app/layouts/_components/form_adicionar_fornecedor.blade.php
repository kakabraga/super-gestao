
                    <form action="{{ route('app.fornecedor.submit') }}" method="post" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Nome
                            </label>
                            <input type="text" value="{{ old('nome') }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm py-2 px-2
                                           focus:border-violet-500 focus:ring-violet-500" name="nome" id="nome"
                                placeholder="Digite o nome do fornecedor">
                        </div>
                         @error('nome')
                    <span class="block text-sm text-red-700 mt-2">
                        {{ $message }}
                    </span>
                @enderror
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Site
                            </label>
                            <input type="text" value="{{ old('site') }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm py-2 px-2
                                           focus:border-violet-500 focus:ring-violet-500" name="site" id="site"
                                placeholder="Digite o Site do fornecedor">
                        </div>
                         @error('site')
                    <span class="block text-sm text-red-700 mt-2">
                        {{ $message }}
                    </span>
                @enderror
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Email
                            </label>
                            <input type="text" value="{{ old('email') }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm py-2 px-2
                                           focus:border-violet-500 focus:ring-violet-500" name="email" id="email"
                                placeholder="Digite o Email do fornecedor">
                        </div>
                         @error('email')
                    <span class="block text-sm text-red-700 mt-2">
                        {{ $message }}
                    </span>
                @enderror
                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                UF
                            </label>
                            <input type="text" value="{{ old('uf') }}"class="mt-1 w-full rounded-md border-gray-300 shadow-sm py-2 px-2
                                           focus:border-violet-500 focus:ring-violet-500" name="uf" id="uf"
                                placeholder="Digite o UF do fornecedor">
                        </div>
                         @error('uf')
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