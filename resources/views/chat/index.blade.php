@extends('layouts.app')

@section('title', 'Chats')

@section('content')
<a href="#" class="chat-page__show-contacts">
    <livewire:icon icon="plus" colour="black">    
</a>

<div class="chat-page">
    <livewire:chat.search />
    <livewire:chat.contacts-list />
</div>
@endsection