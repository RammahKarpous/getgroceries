<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;

class UserForm extends Component
{
    use WithFileUploads;

    public $success;
    public $profile_picture;
    public $request;

    public function update()
    {
        $user = auth()->user();

        $this->validate([
            'profile_picture' => 'image'
        ]);
        
        $fileName = $this->profile_picture->store('storage/users/profile_pictures');

        dd($fileName);
        
        if ($this->profile_picture) {
            dd('user has chosen image ' . $this->profile_picture);
            // $file = request('profile_picture')->getClientOriginalName();
            // request('profile_picture')->storeAs('images/menu', $file, 'public');
        } else {
            dd('user has not chosen an image');
            // $file = $user->profile_picture;
        }

        // $user->update(array_merge($this->validateData(), ['profile_picture' => $file]));
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}