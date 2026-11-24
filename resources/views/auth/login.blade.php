<x-guest-layout>
    <div class="login-form">

        <h1 class="login-title">Bienvenido</h1>
        <p class="login-subtitle">Inicia sesión en tu cuenta</p>

        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="login-field">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username"
                />

                <x-input-error :messages="$errors->get('email')" />
            </div>

            <!-- Password -->
            <div class="login-field">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />

                <x-input-error :messages="$errors->get('password')" />
            </div>

            <!-- Remember me -->
            <div class="login-remember">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Buttons -->
            <div class="login-actions">

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="login-forgot">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="standar-button">
                    {{ __('Log in') }}
                </x-primary-button>

            </div>
        </form>

    </div>
</x-guest-layout>