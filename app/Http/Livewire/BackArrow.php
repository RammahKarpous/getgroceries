<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BackArrow extends Component
{
    public $to;
    public $model = '';
    
    public function render()
    {
        return view('livewire.back-arrow');
    }
}