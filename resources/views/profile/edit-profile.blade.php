
<div class="edit">
    <x-app-layout>
        <x-slot name="header">
        </x-slot>
    </x-app-layout>
    <div class="edit__box">
        <div class="edit__box__container">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form action="{{ route('users.update-profile') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="edit__box__container-name">
                <label for="name">Name</label>
                <input type="text" class="form-contorl" name="name" id="name" value="{{ $user->name }}">
            </div>

            <div class="edit__box__container-phone">
                <label for="phone">Phone</label>
                <input type="text" class="form-contorl" name="phone" id="phone" value="{{ $user->phone }}">
            </div>

            <div class="edit__box__container-email">
                <label for="email">Email</label>
                <input type="text" class="form-contorl" name="email" id="email" value="{{ $user->email }}">
            </div>

            <button type="submit" class="btn-success">Udate Profile</button>
            </form>
        </div>
    </div>
</div>