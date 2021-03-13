<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Icon extends Component
{
    public $size = 24;
    public $icon = '';
    public $colour = 'white';

    public function render()
    {
        return view('livewire.icon');
    }

}