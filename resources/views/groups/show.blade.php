@extends('layouts.app')

@section('title', $group->name)

@section('content')
    <div class="wrapper">
        <livewire:back-arrow to="groups.index">
        <livewire:members model="{{ $group->id }}">
        <livewire:add-button to="groups.add-member" model="{{ $group->uuid }}">
    </div>
@endsection