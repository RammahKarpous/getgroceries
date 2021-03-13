<article class="member-groups">
    @foreach ($member->groups as $group)
        <a href="{{ route('groups.show', $group->uuid) }}" class="member-groups__group">
            {{ $group->name }}
            
            <button type="submit" wire:click.prevent="delete({{ $group->id }})">
                <livewire:icon icon="bin" colour="red">
            </button>
        </a>
    @endforeach

    @if (count($member->groups) > 0)
        @if ($limit !== 'none')
            <a href="{{ route('groups.index') }}" class="button button--link mt-10">View all groups</a>
        @endif

    @else
        <small>You haven't created or been added to any groups.</small>
    @endif
</article>