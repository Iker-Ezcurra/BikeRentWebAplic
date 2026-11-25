<nav class="navbar">
    <a href="{{ url('/') }}" class="logo">Inicio</a>

    <div class="nav-buttons">

        @guest
            <form action="{{ route('register') }}" method="GET">
                <button type="submit" class="btn btn-register">
                    Registrarse
                </button>
            </form>

            <form action="{{ route('login') }}" method="GET">
                <button type="submit" class="btn btn-login">
                    Iniciar sesión
                </button>
            </form>
        @endguest

        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-logout">
                    Cerrar sesión
                </button>
            </form>
        @endauth

        <button id="theme-toggle" class="btn btn-theme">
            Modo oscuro
        </button>

    </div>
</nav>