@extends('layouts.app')

@section('title', 'Settings')

@section('content')
    <a href="#" 
        onclick="event.preventDefault(); document.querySelector('#logout-form').submit();" 
        class="button button--secondary button--logout">Logout</a>

    <form action="{{ route('logout') }}" id="logout-form" method="post" style="display: none;">
        @csrf
    </form>
@endsection