<form class="form" wire:submit.prevent="update">

    <div class="form__group">
        <label for="profile_picture" class="form__picture-wrapper">
            <img src="{{ 
                auth()->user()->profile_picture ? 
                asset('storage/users/' . auth()->user()->profile_picture) : 
                asset('images/default-profile-picture.svg')}}" alt="current user profile picture">

            Upload image
        </label>

        <input 
            type="file" id="profile_picture" 
            wire:model="profile_picture"
            name="profile_picture" 
            class="form__input form__input--file" 
            value="{{ auth()->user()->profile_picture }}">

        @error('profile_picture') <span class="message--error">{{ $message }}</span> @enderror
    </div>

    <x-input for="name" type="text" label="First Name" value="{{ auth()->user()->name }}"/>

    <x-input for="email" type="email" label="Email" value="{{ auth()->user()->email }}"/>

    <input type="submit" value="Update changes" class="button button--primary" />
    @csrf
</form>
