<?php

namespace App\View\Components;

use Illuminate\Routing\Route;
use Illuminate\View\Component;

class BurgerNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.burger-nav');
    }

    public function links()
    {
        return [
            ['to' => 'pages.index', 'text' => 'Home'],
            ['to' => 'auth.login', 'text' => 'Login'],
            ['to' => 'auth.register', 'text' => 'Register']
        ];
    }
}