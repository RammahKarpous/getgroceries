<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class Search extends Component
{
    public $query = '';
    
    public function clearSearch()
    {
        $this->reset(['query']);
    }

    public function render()
    {
        return view('livewire.chat.search');
    }
}