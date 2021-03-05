<nav class="nav-bar">
    <div class="wrapper">
        <a href="{{ route('pages.index') }}" class="nav-bar__logo">
            <img src="{{ asset('images/logo/logo.svg') }}" alt="logo image" />
        </a>

        <div class="nav-bar__toggle">
            <div class="nav-bar__toggle-bars"></div>
            <div class="nav-bar__toggle-bars"></div>
            <div class="nav-bar__toggle-bars"></div>
        </div>
        
        <ul class="nav-bar__list hide">
            @foreach ($links as $link)
                <li class="nav-bar__item">
                    <a href="{{ route($link['to']) }}" class="nav-bar__link {{ Route::currentRouteName() === $link['to'] ? 'active' : '' }}">
                        {{ $link['text'] }}
                    </a></li>
            @endforeach
        </ul>
    </div>
</nav>