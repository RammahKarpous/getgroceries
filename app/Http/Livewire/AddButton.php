<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddButton extends Component
{

    public $to;
    public $model = '';
    
    public function render()
    {
        return view('livewire.add-button');
    }
}