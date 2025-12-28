<div class="flex items-center gap-3 rounded-lg border border-red-300 bg-red-50 p-4 text-red-700">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 9v2m0 4h.01M12 3C7.03 3 3 7.03 3 12s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9z" />
    </svg>

    @foreach ($errors->all() as $key => $value) {
            <span class="text-sm font-medium">
            <span type="text" placeholder="E-mail" class="shadow-xl py-2 px-3 rounded mt-2 mb-4 focus:outline-blue-400"
                name='email' id='email'>{{  $key }}</span>
                <span type="text" placeholder="E-mail" class="shadow-xl py-2 px-3 rounded mt-2 mb-4 focus:outline-blue-400"
                    name='email' id='email'>{{  $value }}</span>
            }
        </span>
        @endforeach
</div>