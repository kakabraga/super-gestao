<footer class="bg-gray-900 text-gray-300 mt-12">
  <div class="mx-auto px-6 py-6
              grid grid-cols-1 md:grid-cols-3 gap-6
              text-center md:text-left items-center border-t border-gray-800">

    <!-- Direitos -->
    <div class="text-sm text-gray-400">
      © 2025 Sua Empresa.<br>
      Todos os direitos reservados.
    </div>

    <!-- Redes sociais -->
    <div class="flex flex-col items-center">
      <h2 class="text-xs font-semibold uppercase tracking-wide text-gray-400 mb-2">
        Redes sociais
      </h2>
      <div class="flex gap-4">
        <img src="{{ asset('img/facebook.png') }}"
          class="h-5 w-5 opacity-70 hover:opacity-100 transition cursor-pointer">
        <img src="{{ asset('img/linkedin.png') }}"
          class="h-5 w-5 opacity-70 hover:opacity-100 transition cursor-pointer">
        <img src="{{ asset('img/youtube.png') }}"
          class="h-5 w-5 opacity-70 hover:opacity-100 transition cursor-pointer">
      </div>
    </div>

    <!-- Contato -->
    <div class="text-sm space-y-1 md:text-right">
      <h2 class="text-xs font-semibold uppercase tracking-wide text-gray-400 mb-2">
        Contato
      </h2>
      <span class="block hover:text-indigo-400 transition cursor-default">
        (11) 3333-4444
      </span>
      <span class="block hover:text-indigo-400 transition cursor-default">
        supergestao@dominio.com.br
      </span>
    </div>

  </div>
</footer>
