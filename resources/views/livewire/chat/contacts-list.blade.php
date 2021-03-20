<div class="contacts hidden">
    <h3>Contacts</h3>

    @if (count($groups) > 0)
        @foreach ($groups as $group)
            @foreach ($group->users as $user)
                @if (count($group->users) > 1 && $user->id == auth()->user()->id)
                    <h4 class="mb-10">{{ $group->name }}</h4>
                @endif
            @endforeach

            @foreach ($group->users as $user)
                @if ($user->id !== auth()->user()->id)
                    <a href="#" class="openChat contacts__contact" wire:click.prevent="createChat({{ $user->id }})">
                        <img class="contact__image" src="{{ asset('images/default-profile-picture.svg') }}" alt="Users' image">
                        <p class="contact__name">{{ $user->name }}</p>
                    </a>
                @endif
            @endforeach
        @endforeach
    @endif
</div>
