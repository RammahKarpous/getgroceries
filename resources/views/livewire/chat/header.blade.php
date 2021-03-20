<div class="chat__header">
    <a href="#" class="close-chat"><livewire:icon icon="chevron-left" colour="black" /></a>
    <img src="{{ asset('images/default-profile-picture.svg') }}" alt="User's image">

    <div class="info">
        @if ($user)
            <h5 class="my-0">{{ $user['name'] }}</h5>
        @endif
        <small>offline</small>
    </div>

    <button type="submit" class="button--icon showGallery"><livewire:icon icon="gallery" colour="black"></button>
</div>
