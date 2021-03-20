<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MobileNav extends Component
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
        return view('components.mobile-nav');
    }

    public function links()
    {
        return [
            [
                'to' => 'profile',
                'icon' => 'account',
                'name' => 'Profile'
            ],
            [
                'to' => 'profile',
                'icon' => 'cart',
                'name' => 'My list'
            ],
            [
                'to' => 'chats.index',
                'icon' => 'message',
                'name' => 'Chats'
            ],
            [
                'to' => 'settings.index',
                'icon' => 'cog',
                'name' => 'Settings'
            ],
        ];
    }

    public function pages()
    {
        return [
            '/profile',
            '/groups'
        ];
    }
}