<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Krievins - Registration</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    
<div class="regist_container">
    <div class="regist_container__form">
        <h1 class="regist_container__form-title">
            Registration
        </h1>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="" />
            </a> --}}
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="regist_container__form-name">
            <x-label for="name" :value="__('- Name')" />
            <x-input id="name" class="regist_container__form-name-input" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        {{-- Phone Number --}}
        <div class="regist_container__form-phone">
            <label for="phone" class="">{{ __('- Phone') }}</label>
            <input id="phone" type="text" class="regist_container__form-phone-input @error('phone') is-invalid @enderror" name="phone" required >
        </div>

        {{-- Date Of birth --}}
        <div class="regist_container__form-birth">
            <label for="birth_date" class="">{{ __('- Birth Date') }}</label>
            <input placeholder="YY-MM-DD" id="birth_date" type="text" class="regist_container__form-birth-input datepicker @error('birth_date') is-invalid @enderror" name="birth_date" required >
        </div>

        <!-- Email Address -->
        <div class="regist_container__form-email">
            <x-label for="email" :value="__('- Email')" />
            <x-input id="email" class="regist_container__form-email-input" type="email" name="email" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div class="regist_container__form-pasw">
            <x-label for="password" :value="__('- Password')" />
            <x-input id="password" class="regist_container__form-pasw-input"
            type="password" name="password" required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="regist_container__form-conf">
            <x-label for="password_confirmation" :value="__('- Confirm Password')"/>
            <x-input id="password_confirmation" class="regist_container__form-conf-input"
            type="password" name="password_confirmation" required />
        </div>

        {{-- Login --}}
        <div class="regist_container__form-login">
            <a class="regist_container__form-login-link" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <x-button class="regist_container__form-register">
                {{ __('Register') }}
            </x-button>
        </div>
    </form>
    </div>
</div>
</body>
</html>

