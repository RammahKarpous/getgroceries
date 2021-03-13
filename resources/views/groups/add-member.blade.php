@extends('layouts.app')

@section('title', 'Add member to ' . $group->name)

@section('content')
    <div class="wrapper">
        <livewire:back-arrow to="groups.show" model="{{ $group->uuid }}">
        <livewire:add-member group="{{ $group->id }}" />
    </div>
@endsection