<nav class="nav nav--mobile">
    <ul class="nav__list">
        @foreach ($links as $link)
            <a class="nav__link" href="{{ route($link['to']) }}">
                <x-icon icon="{{ $link['icon'] }}" colour="white" />
                {{ $link['name'] }}
            </a>
        @endforeach
    </ul>
</nav>