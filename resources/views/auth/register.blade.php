<head>
  @include('auth.css')
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
</head>
<form method="POST" action="{{ route('register') }}">
    @csrf

    <h2>Register</h2>

    <div class="reg-log-container">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <br>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <br>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" class="w-full"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone Address -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <br>
            <x-text-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" autocomplete=NULL />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <br>
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" autocomplete=NULL />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="usertype" :value="__('Role')" />
            <br>
            <x-text-input id="usertype" class="block mt-1 w-full" type="text" name="usertype" :value="old('usertype')" autocomplete=NULL />
            <x-input-error :messages="$errors->get('usertype')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <br>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <br>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="btnregister">
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <div class="register-other">
            <p>Already have an account?
            <a href="{{ route('login') }}">
                {{ __('Log In') }}
            </a>
            .</p>
        </div>
    </div>
</form>