<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="@yield('description')">

        <title>GetGroceries - @yield('title')</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- @laravelPWA --}}
        @livewireStyles
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    </head>
    <body>
        <main>
            @guest
                <x-burger-nav />
                @else
                <div class="mobile-header-placeholder"></div>
                <x-mobile-header>
                    @yield('title')
                </x-mobile-header>
            @endguest

            @yield('content')

            @auth
                <x-mobile-nav />
                <div class="nav-placeholder"></div>
            @endauth
        </main>

        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
