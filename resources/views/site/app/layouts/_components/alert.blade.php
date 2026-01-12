@props([
    'type' => 'success', // success | error | warning | info
    'timeout' => 4000,   // tempo em ms
])

@php
    $styles = [
        'success' => 'bg-green-50 border-green-200 text-green-800',
        'error'   => 'bg-red-50 border-red-200 text-red-800',
        'warning' => 'bg-yellow-50 border-yellow-200 text-yellow-800',
        'info'    => 'bg-blue-50 border-blue-200 text-blue-800',
    ];

    $icons = [
        'success' => 'M5 13l4 4L19 7',
        'error'   => 'M6 18L18 6M6 6l12 12',
        'warning' => 'M12 9v2m0 4h.01',
        'info'    => 'M13 16h-1v-4h-1m1-4h.01',
    ];
@endphp

<div
    x-data="{ show: true }"
    x-init="setTimeout(() => show = false, {{ $timeout }})"
    x-show="show"
    x-transition.opacity.duration.300ms
    role="alert"
    class="flex items-center gap-3 max-w-xl mx-auto mt-4
           border px-4 py-3 rounded-xl shadow-sm
           {{ $styles[$type] }}"
>
    <!-- Ícone -->
    <svg xmlns="http://www.w3.org/2000/svg"
         class="h-5 w-5 flex-shrink-0"
         fill="none"
         viewBox="0 0 24 24"
         stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="{{ $icons[$type] }}" />
    </svg>

    <!-- Mensagem -->
    <div class="text-sm font-medium">
        {{ $slot }}
    </div>

    <!-- Botão fechar -->
    <button
        @click="show = false"
        class="ml-auto text-current opacity-60 hover:opacity-100 transition"
    >
        ✕
    </button>
</div>
