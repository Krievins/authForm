<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Krievins - Login</title>
</head>
<body>
    <div class="container">
        <div class="container__form">
            <h1 class="container__form-title">
                Login
            </h1>
            <x-slot name="logo">
                {{-- <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a> --}}
            </x-slot>
    
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
    
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
            <!-- Email Address -->
            <div class="container__form-email">
                <x-label for="email" :value="__('- Email')" />
                <x-input id="email" class="container__form-email-input" type="email" name="email" :value="old('email')" required autofocus />
            </div>
    
            <!-- Password -->
            <div class="container__form-pasw">
                <x-label for="password" :value="__('- Password')" />
                <x-input id="password" class="container__form-pasw-input" type="password" name="password" required autocomplete="current-password" />
            </div>
    
            <!-- Remember Me -->
            <div class="container__form-remember">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="container__form-remember-checkbox" name="remember">
                    <span class="container__form-remember-checkbox-span">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="container__form-forgot">
                @if (Route::has('password.request'))
                    <a class="container__form-forgot-link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-button class="container__form-login">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

        
