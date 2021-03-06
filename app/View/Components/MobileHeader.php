<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MobileHeader extends Component
{

    public $title;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $type = '')
    {
        $this->title = $title;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.mobile-header');
    }
}