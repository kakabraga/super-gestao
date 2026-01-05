    <div class="bg-sky-900 text-white px-6 py-4 flex items-center justify-between">

        <div class="logo">
            <a href="{{ route('site.index') }}"><img src="{{ asset('img/logo.png') }}"></a>
        </div>

        <div class="menu">
            <ul class="hidden md:flex items-center gap-6">
                <li><a href="{{ route('site.index') }}">Principal</a></li>
                <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
                <li><a href="{{ route('site.login.view')}}">Login / Register</a></li>
            </ul>
        </div>
    </div>