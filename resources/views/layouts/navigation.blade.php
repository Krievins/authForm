<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6ZTSJMR25Q"></script>

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
        <div class="navigation">
            <!-- Logo -->
            <x-nav-link class="navigation-logo" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }} 
            </x-nav-link>

            {{-- Log Out --}}
            <x-nav-link class="navigation-logout" :href="route('logout')" onclick="event.preventDefault();
            this.closest('form').submit();">
                <svg class="navigation-logout-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 416H96c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h64c17.67 0 32-14.33 32-32S177.7 32 160 32H96C42.98 32 0 74.98 0 128v256c0 53.02 42.98 96 96 96h64c17.67 0 32-14.33 32-32S177.7 416 160 416zM502.6 233.4l-128-128c-12.51-12.51-32.76-12.49-45.25 0c-12.5 12.5-12.5 32.75 0 45.25L402.8 224H192C174.3 224 160 238.3 160 256s14.31 32 32 32h210.8l-73.38 73.38c-12.5 12.5-12.5 32.75 0 45.25s32.75 12.5 45.25 0l128-128C515.1 266.1 515.1 245.9 502.6 233.4z"/></svg>
                {{ __('Log Out') }}
            </x-nav-link>

            <x-nav-link class="navigation-profile" :href="route('profile')">
                <svg class="navigation-profile-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg>
                {{ __('My Profile') }}
            </x-nav-link>

            {{-- Profile --}}
        
            <!-- Settings -->
            <x-slot name="content">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
            </x-slot>
        </div>

</nav>
