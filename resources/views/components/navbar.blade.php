<nav class="navbar">
    <a href="{{ url('/') }}">Inicio</a>

    <div>
        @guest
            <a href="{{ route('login') }}">Iniciar sesión</a>
            <a href="{{ route('register') }}">Registrarse</a>
        @endguest

        @auth
            <span>Hola, {{ Auth::user()->name }}</span>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Cerrar sesión</button>
            </form>
        @endauth
    </div>
</nav>