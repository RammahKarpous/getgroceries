@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="profile">
    <section class="wrapper">
        <article class="user">
            <div class="user__wrapper">
                <img class="user__image" src="{{ asset('images/default-profile-picture.svg') }}" alt="{{ auth()->user()->name }}'s profile picture" />

                <div class="user__information">
                    <h3 class="user__name">
                        {{ auth()->user()->name }}
                    </h3>
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