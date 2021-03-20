@extends('layouts.app')

@section('title', $room->name)

@section('content')
    <livewire:chat.chat-room />
@endsection