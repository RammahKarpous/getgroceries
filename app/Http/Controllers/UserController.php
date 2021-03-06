<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view('auth.edit');
    }

    public function update(User $user)
    {

        $file = request()->menu_image->getClientOriginalName();
        request()->menu_image->storeAs('images/menu', $file, 'public');

        $user->update(array_merge($this->validateData(), ['profile_picture' => $file]));
        session()->put('success', 'Your details have been updated successfully.');
        return redirect()->back();
    }

    public function validateData()
    {
        return request()->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'profile_picture' => ['nullable' ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
        ]);
    }
}