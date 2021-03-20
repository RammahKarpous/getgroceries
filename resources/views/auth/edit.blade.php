@extends('layouts.app')

@section('title', 'Update ' . auth()->user()->name )
    
@section('content')
    <div class="wrapper">
        <livewire:user-form />
    </div>
@endsection