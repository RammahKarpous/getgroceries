<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public $size;
    public $icon;
    public $colour;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($size = 24, $icon = '', $colour = 'white')
    {
        $this->size = $size;
        $this->icon = $icon;
        $this->colour = $colour;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.icon');
    }
}