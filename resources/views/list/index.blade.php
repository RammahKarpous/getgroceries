@extends('layouts.app')

@section('title', 'Shopping list')

@section('content')
    <div class="wrapper">
        @foreach (auth()->user()->groups as $group)
            @if (count($group->shoppingLists) > 0)
                @foreach ($group->shoppingLists as $list)
                    {{ $list }}
                @endforeach
            @else
                <p>There are no shopping lists</p>
            @endif
        @endforeach

        <livewire:add-button to="list.create">
    </div>
@endsection