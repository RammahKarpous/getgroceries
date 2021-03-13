@extends('layouts.app')

@section('title', 'Create a group')

@section('content')
    <div class="wrapper">
        <livewire:back-arrow to="groups.index">
        <x-member-groups type="with-action">
            <header>
                <livewire:groups-form />
            </header>
        </x-member-groups>
    </div>
@endsection