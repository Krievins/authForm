
<div class="profile">
    <x-app-layout>
        <x-slot name="header">
            
        </x-slot>
    </x-app-layout>
    <div class="profile__box">
        <div class="profile__box__container">
            <svg class="profile__box__container-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg>
            <h1>{{ $user->name }}</h1>
            <h1>{{ $user->email }}</h1>
            <h1>{{ $user->birth_date }}</h1>
            <h1>{{ $user->phone }}</h1>
            <h1>{{ $user->created_at }}</h1>
            <x-nav-link class="" :href="route('edit-profile')">
                {{{__('Edit Profile') }}}
            </x-nav-link>
        </div>
        
    </div>
    
</div>
