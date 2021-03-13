<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{

    public $type;
    public $for;
    public $label;
    public $value;
    public $inputName;

    public function render()
    {
        return view('livewire.input');
    }
}