<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class Header extends Component
{
    public $user = '';
    
    public function render()
    {
        return view('livewire.chat.header');
    }
}