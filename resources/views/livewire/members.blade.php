<article class="members">
    @foreach ($group->users as $member)
        <div class="member-groups__group">
            <div class="member-groups__info-section">
                <img src="{{ 
                    $member->profile_picture ? 
                    asset('storage/users/profile_pictures/' . $member->profile_picture) : 
                    asset('images/default-profile-picture.svg')}}" alt="{{ $member->name }}' image">

                <div>
                    <p class="my-0">{{ $member->name }} </p>
                    <small>{{ $member->email }} </small>
                </div>
            </div>

            <button type="submit" wire:click.prevent="removeMember({{ $member->id  }}, {{ $group->id }})">
                <livewire:icon icon="bin" colour="red">
            </button>
        </div>
    @endforeach
</article>