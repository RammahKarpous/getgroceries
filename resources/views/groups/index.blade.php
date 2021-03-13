@extends('layouts.app')

@section('title', 'All groups')

@section('content')
    <div class="wrapper">
        <x-member-groups type="with-action">
            <livewire:groups>
        </x-member-groups>

        <livewire:add-button to="groups.create">
    </div>
@endsection