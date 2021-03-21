@extends('layouts.app')

@section('title', 'Shopping list')

@section('content')
<div class="shopping-lists">

    @foreach (auth()->user()->shoppingLists as $list)
        @if (count(auth()->user()->shoppingLists) > 0)
            <a class="shopping-lists--list" href="{{ route('list.show', $list->uuid) }}">
                {{ $list->name }}
                <button wire:click="deleteList({{ $list->id }})" class="button--icon"><livewire:icon icon="bin" colour="red"></button>
            </a>
        @else
            <p class="mx-0">There are no shopping lists</p>
        @endif
    @endforeach
</div>

    <livewire:add-button to="list.create" />
@endsection