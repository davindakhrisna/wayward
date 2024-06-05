<head>
  @include('auth.css')
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
</head>

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <h2>Reset Password</h2>

    <div class="reg-log-container">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400" style="padding-bottom: 0.7rem; text-align: justify;" >
        {{ __("No problem! If you've forgotten your password, simply provide your email address, and we'll send you a password reset link to choose a new one.") }}
    </div>

    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Email Password Reset Link') }}
        </x-primary-button>
    </div>
    </div>
</form>