@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="profile">
    <section class="wrapper">
        <article class="user">
            <div class="user__wrapper">
                <img class="user__image" src="{{ asset('images/default-profile-picture.svg') }}" alt="{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}'s profile picture" />

                <div class="user__information">
                    <h2 class="user__name">
                        {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                    </h2>
                    <small class="user__email">{{ auth()->user()->email }}</small>
                </div>
            </div>

            <a href="{{ route('auth.edit') }}">
                <x-icon icon="pencil" colour="black" />
            </a>
        </article>

        <article class="map"></article>

        <x-member-groups type="with-action">
            <header>
                <p>Member groups</p>
                <a href="{{ route('groups.create') }}" class="button button--primary">Create a group</a>
            </header>

            <livewire:groups limit=3>
        </x-member-groups>
    </section>
</div>
@endsection