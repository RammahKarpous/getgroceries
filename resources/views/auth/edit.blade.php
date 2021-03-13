@extends('layouts.app')

@section('title', 'Update ' . auth()->user()->first_name . ' ' . auth()->user()->last_name)
    
@section('content')
    <div class="wrapper">
        <livewire:user-form />
    </div>
@endsection