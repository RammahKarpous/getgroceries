@if (Request::is('/profile'))
    <div class="add-icon">
        <x-icon icon="add-new" size=60 colour="black" />
    </div>
@endif

<nav class="nav nav--mobile">
    <ul class="nav__list">
        <a class="nav__link" href="/profile">
            <x-icon icon="account" colour="white" />
            Profile
        </a>
    </ul>
</nav>