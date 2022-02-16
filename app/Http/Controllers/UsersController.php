<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Http\Requests\Users\UpdateProfileRequest;

class UsersController extends Controller
{   
    public function resolveUser()

    {

        return auth()->user();

    }
    
    
    //
    public function profile() {
        return view('profile.profile')->with('user', auth()->user());
    }

    public function edit_profile() {
        return view('profile.edit-profile')->with('user', auth()->user());
    }

    public function update(UpdateProfileRequest $request) {
        
        $user = auth()->user();

        $user -> update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        
        ]);

        session()->flash('success', 'User updated succesfully.');

        return redirect(route('profile'));
    }
}
