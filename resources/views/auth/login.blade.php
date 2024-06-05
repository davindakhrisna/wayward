<head>
  @include('auth.css')
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
</head>
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    @csrf

    <h2>Log In</h2>

    <div class="reg-log-container">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <br>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <br>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>

            <div class="forgor-pass">
            @if (Route::has('password.request'))
                <a style="padding-top: 1rem; font-size: 0.7rem; color: #000; text-decoration: underline;" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            </div>
        </div>

        

        <x-primary-button class="ms-3">
            {{ __('Log in') }}
        </x-primary-button>

        <div class="register-other">
            <p>Don't have an account?
            <a href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
            .</p>
        </div>
    </div>
</form>